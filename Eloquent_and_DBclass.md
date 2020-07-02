# Eloquent ORM と DBクラスについて

## Eloquent ORM
ORM object-relational-mapping。<br>
異なる構造の橋渡し。互換性のないデータを自動変換して、相互にデータをやり取りできるようにする仕組み。<br>
DBとphpなら、DBのrecodeをプログラミング言語のobjectとして扱えるようにする仕組み。逆もまたしかり。
### DBクラスとの違い
DBクラスの戻り値は、collection（stdClass Object）や配列。collectionには連想配列がまとめられている。<br>
ORMの戻り値は、collectionクラスのインスタンスなので、プロパティやメソッドを追加できる。app\Model.phpへ追加可能。
### model
テーブルの内容を定義したクラス。
- cmdでmodel作成。 php artisan make:model {Model}。app直下に自動作成される。<br>
laravelでは「テーブル名は複数形、モデルは単数形」の命名規則。例：peopleテーブル、personモデル<br>
単数形のモデルを使うときは、複数形のテーブル名を自動で探してアクセスする。もしテーブルが複数形の名前ではないときは、作成したapp\Model.phpでテーブル名を指定する。protected $table = "tablename"。
- cmdでmodelを利用するcontrollerを作成。 php artisan make:controller {ModelController}。app\Http\Controllerに自動作成。<br>
- controllerにmodelを使えるように記載。use App\Model;<br>
actionにDB処理を記載。全レコードの取得。$variable = Model::all(); 戻り値はcollectionクラスのインスタンスになる。<br>
return view('blade','連想配列')でviewへ変数を渡す。
- viewsにblade.phpを作成し表示処理を記述。
- routes\web.phpでurlとcontrollerを結びつける。例：Route::get('url','ModelController');
### modelのメソッド
- ::all();
- ::where('field','value')->get(); 絞り込んだ複数レコードを取得。
- ::where('field','value')->first(); 絞り込んだ最初のレコードを取得。
- ::find(整数);  idフィールドの絞り込み。Primary Keyは「id」という名で「AI」の「int型」フィールドという前提。もし違う場合はapp\Model.phpに指定する。 protected $primaryKey = 'idname';など。
### スコープ
modelに検索範囲のメソッドを事前に用意することができる。
- local scope
- global scope

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