<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
ここに、アプリケーションのWebルートを登録できます。
これらのルートは、「Web」ミドルウェアグループを含むグループ内のRouteServiceProviderによって読み込まれます。
素晴らしいものを作成してください！
*/

// routeを使えば、単純にurlの入力値とblade.phpフォルダ名前を分離できる。

// ルートにアクセスした時
// そのままfunction(){view('hogehoge')};と振り分けてもよいし、web.phpは共有だから簡素にしたいので、記載を短くするためにcontroller@methodで変数設定とか演算を行って一緒にviewに渡してもよい
Route::get('/','IndexController@index');
