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

        $pre = '日本';
        // DBクラスの静的メソッド::selectでデータを引っ張ってくる
        // レコード（std object）ごとに、calm => valueが格納される二次元配列ができる
        $politics = DB::table('politics')->where('prefecture',$pre)->first();
        $population =DB::table('population')->where('prefecture',$pre)->first();
        // $prefectures=DB::table('population')->limit(47)->get();

        // 連想配列を作る
        $data = ['title' => 'politics',
                'prefecture' => $politics->prefecture,
                'pre_en' => $population ->pre_en,
                'parliament' => round(($politics->parliament/$population->population)*100,2),
                'official' => round(($politics->official / $population->population)*100,1),
                'voters' => round(($politics->voters / $population->population)*100),
                'non_voters' => round(($politics->non_voters / $population->population)*100),
                'politics'=> $politics
            ];

        // view()メソッドの第一引数はbladeファイル。第二引数に連想配列を設定するとviewとsub viewに変数を渡せる
        return view('layouts.index', $data);

        // returnの後にhtmlを直接記載できる
    }
}
