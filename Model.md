# Modelについて
modelはdatabase担当。
laravel直下にdatabaseフォルダがある。

## Eloquent ORM
ORM object-relational-mapping。DBを簡単に扱うための、DBとプログラミング言語（model）の橋渡し機能。

## SQLite
軽量コンパクトなオープンソースデータベースソフト。
- 「ファイル型」<br>
サーバーを用意しなくてもローカルにファイルベースでDBを作れるので、開発用だったり組み込み用として使われることも多い。
- 「サーバー・クライアント型」<br>
サーバーのSQLiteからDBをローカルにダウンロードして、編集後アップロードすることができる。
- カラム型が5つしかなく柔軟（text,integer,null,real,blob）。
- パスワード設定ができない。<br>
そのためDBファイルをサーバーに置くフォルダには.htaccessファイルを置いてアクセス制限をする。deny from allと記述。
### インストール
- WindowsはSQLite webサイトの「Precompiled Binaries for Windows」からダウンロード。<br>
zipファイルの中のsqlite3.dllをパスが設定されているフォルダへ移動（C:\Windows\System32）。
- Macは標準搭載。

## DB Browser for SQLite
GUIツール
- webサイトからダウンロード。
- DB Browser(SQLite)基本アプリと、DBの暗号化に対応したDB Browser(SQLCipher)がある。
### DB用語
- table  データ（recode）を保管・管理するもの。Excelのsheetイメージ。
- clam = field = 列
- row = recode = 行
### table作成
- NN  not null
- PK  primary key
- AI auto increment
- U  unique

## laravelのDB利用の設定
### config/database.php
- 使用するDBを切り替える<br>
'default' => env('DB_CONNECTION', 'hogehoge'),
- データベースファイル。<br>
database_path()の中は、laravelのdatabaseフォルダのパスのこと。<br>
'database' => env('DB_DATABASE', database_path('hogehoge.sqlite')),
### .env環境変数
laravel直下にある。config/database.phpよりも.envが優先される。
- 変更<br>
DB_CONNECTION=hogehoge
- 削除（SQLiteの場合は不要。他のDBであっても削除されていればconfig/database.phpが参照されるので問題なし）<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=laravel<br>
DB_USERNAME=root<br>
DB_PASSWORD=

## migration
テーブル定義の管理。どのテーブルを作成し、どのカラムを追加・削除するなどと記述しておく。<br>
差分変更は、その都度新しいmigrationファイルを作り、phpで処理を記述し、cmdで実行する。過去のファイルは修正しない。どんどん増えるファイルはバージョン管理のため必要。<br>
GUIツールは参照だけにする。<br>
中身のデータはバージョン管理できない。あくまでテーブル定義のみの管理。
### 手順
- databaseフォルダにDBファイルを作成し、laravelのDB利用の設定をする。
- cmdでmigrationファイル作成する。database/migrationにファイルが自動作成される<br>
php artisan make:migration {hogehoge} <br>
オプション --create={hoge_table}はテーブル作成。--table={hoge_table}は既存のテーブル変更。
- 作成したmigrationファイルにphpでテーブルの作成などの処理を書く。up/down不要な方をコメントアウトしておく。
- cmdで実行。php artisan migrate<br>
database/migrationフォルダの中にある全てのmigrationファイルが実行される。<br>
初回はmigrationテーブルが作成される。どのファイルが実行されたかはDBのmigrationテーブルに追記され、2回目以降は記載がないファイル（差分）のみ実行される。
- 元に戻すには php artisan migrate:rollback --{回数}

## seeder
初期状態でレコードを用意する機能。
- cmdでseederファイルを作成。database/seedsに自動作成される。<br>
php artisan make:seeder {hogehoge}
- phpを記載<br>
DB::table('hogehoge')->insert(連想配列);
- database/seeds/DatabaseSeederに登録<br>
$this=>call(hotehote::class);
-cmdで実行  php artisan db:seed

## DBクラス
クラスの場所：vendor\laravel\framework\src\Illuminate
### SQLがしっかり書ける場合
- controllerにDBクラスを追加<br>
use Illuminate\Support\Facades\DB;
- controllerの処理actionにDB::select（::insert,::update,::deleteなど）を書く。<br>
$variable = DB::select('SQL',連想配列);<br>
select()の第一引数はSQL文、第二引数はプレースホルダ（:hogehoge）の連想配列（['hogehoge'=>'hoge'])。
- 結果$variableに、レコード（stdClass object）ごとに、field => valueが格納されるcollectionができる。<br>
collectionとは、自身を操作するメソッドを持つ配列。<br>
Object名は数字（0～）。$variable[int]->fieldでvalueを取り出す。全部レコードを取り出すには、foreachで順番にobjectを取り出す。
### クエリビルダ
SQLクエリ文を作成するためのメソッドチェーン。<br>
SQL文をしっかり書かなくてもよい、php処理としてメソッドを呼び出すだけでDBへアクセスできる。
- controllerにDBクラスを追加<br>
use Illuminate\Support\Facades\DB;
- controllerの処理actionにDB::tableなどを書く。
$variable = DB::table('hogehoge')->get();<br>
#### メソッド
SQL文と違いwhereが先、次にorderBy、offset、limit、最後にgetやfirst。
- where('field','演算記号やlike','value') レコードが無ければ戻り値はnull。<br>
where()->where()と続けることで更に絞り込みができる。where()->orWhere()でor検索ができる。
- orderBy('field','ascまたはdesc')  並び順
- offset(int)  intの次の整数からレコードを取得
- limit(int)  intの数だけレコードを取得
- get(['field'])  検索されたすべてのレコードを返す。戻り値はcollection。
- first()  検索結果のうち最初のレコードだけ返すので、戻り値はobjectになる（collectionじゃない)。
- insert(連想配列)  ['field' => 'value']の連想配列を追加
- update(連想配列)  whereでレコードを指定した後に更新
- delete()   whereでレコードを指定した後に削除

