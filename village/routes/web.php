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

// ルートにアクセスした時
Route::get('/', function () {
    // 連想配列を作る
    $data = ['title' => 'Index'];
    // 第二引数に連想配列を設定するとviewとsub viewに変数を渡せる
    return view('layouts.index',$data);
});
