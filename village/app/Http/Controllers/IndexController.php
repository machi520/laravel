<?php
// web.phpは共有なので簡素にしたい、個別にcontrollerを作って関数や変数などの処理を詳しく書いたほうがよい
// controllerはクラスとして作成され、以下のnamespaceに配置される
namespace App\Http\Controllers;

// 初期設定で、以下のRequestクラスが使える状態にしてある
use Illuminate\Http\Request;

// DBクラスが使えるようにする
use Illuminate\Support\Facades\DB;

// 繰り返すが、controllerはクラスとして作成される。元祖Controllerクラスを継承している
class IndexController extends Controller
{
    // controllerの処理をactionという。publicで変数や関数を設定して、外部で使えるようにする

    public function index(){

        // DBクラスの静的メソッド::selectでデータを引っ張ってくる
        // レコード（std object）ごとに、calm => valueが格納される二次元配列ができる
        $nihon = DB::table('politics')->where('prefecture','全国')->first();
        // $prefectures=DB::table('population')->limit(47)->get();

        // 連想配列を作る
        $data = ['title' => 'Index','nihon'=>$nihon];

        // view()メソッドの第一引数はbladeファイル。第二引数に連想配列を設定するとviewとsub viewに変数を渡せる
        return view('layouts.index', $data);

        // returnの後にhtmlを直接記載できる
    }
}
