# laravel
laravelの使い方メモと練習

## Windowsでの環境設定
### install
- xamppはwebサイトのインストーラーから入れる
（別にphp単体でインストールしてもよいが他でも使うと思うので）
- composerもwebサイトのインストーラーから入れる
- laravelインストールはcmdコマンド
composer global require laravel/installer
- larabelをシステムの環境変数に設定しておく
場所：C:\Users\ {user_name} \AppData\Roaming\Composer\vendor\bin
- phpが7.2以上か確認（cmdにて）
php -v
### projectの作成
projectとは、webアプリで必要なfileやfolderをまとめたもの。
- cmdコマンドで任意のフォルダを作成・移動する
- laravel new {project name}
### webサーバーの起動
- cmdでprojectがあるフォルダに移動して
php artisan serve

## frameworkについて
### MVC
laravelはmodel view controller
- model  DBにアクセスするときに、テーブルを意識せずにDB操作ができる。Eloquent（ORマッパー）
- view  rendering担当。bladeテンプレート独自の表記あり
- controller  全体の制御。http requestを受け取りhttp responseを返す。viewとmodelを制御する。演算やDBアクセス担当。
### laravelのフォルダについて
app,routes,resourceの3フォルダの役割をまず覚える
- app/Http  webアプリの処理を置くフォルダ
- routes/wen.php  webページのルート情報を記述
- resources/views  webブラウザにrenderingされるファイル（bladeテンプレート）を置くフォルダ。
### routing（routeの管理機能）
特定のアドレスにアクセスしたときに、どの処理を呼び出して実行するかを管理
Route::get('/address','HogeControkker@hogehoge)
### controller

### laravel7のcss置き場
public/asset/cssに初期設定のapp.cssがあるとのネットのうわさだが、laravel7だからか見当たらない。
href="{{ asset('css/hogehoge.css') }}"も使えない。
公式ページ「Laravel 7.x JavaScriptとCSSスカフォールド」の手順を試してみるとできた。


## useful functions
### php artisan make:hogehogeコマンド
適切なfolderへ適切な形式のfileを自動作成してくれ便利。<br>
viewはartisanコマンドでは作れない。最初からあるwelcome.blade.phpをコピーして使う。
- php artisan make:controller {name}  controllerを作成
末尾に--resourceをつけるとメソッド（初期表示、登録、変更、削除など）がついた状態で作成される
- php artisan make:model {name}  modelを作成
- php artisan make:migration {name}  migrationを作成
- php artisan make:provider {name} service providerを作成111
### その他laravlの便利機能
- Eloquent の scopeメソッド
- DI(Dependency Injection)
- Amazon SQS,SES,S3と連携
- Breadcrumbs