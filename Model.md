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
そのためDBファイルをサーバーに置くフォルダには.htaccessファイルを置いてでアクセス制限をする。deny from allと記述。
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

