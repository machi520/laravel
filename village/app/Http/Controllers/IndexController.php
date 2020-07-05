<?php
// web.phpは共有なので簡素にしたい、個別にcontrollerを作って関数や変数などの処理を詳しく書いたほうがよい
// controllerはクラスとして作成され、以下のnamespaceに配置される
namespace App\Http\Controllers;

// 初期設定で、以下のRequestクラスが使える状態にしてある
use Illuminate\Http\Request;

// DBクラスが使えるようにする
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

// 繰り返すが、controllerはクラスとして作成される。元祖Controllerクラスを継承している
class IndexController extends Controller
{
    // controllerの処理をactionという。publicで変数や関数を設定して、外部で使えるようにする

    public function politics(){

        $pre = '青森';
        // DBクラスの静的メソッド::selectでデータを引っ張ってくる
        // レコード（std object）ごとに、calm => valueが格納される二次元配列ができる
        $politics = DB::table('politics')->where('prefecture',$pre)->first();
        $population =DB::table('population')->where('prefecture',$pre)->first();
        $expenditure = DB::table('expenditure')->where('prefecture',$pre)->first();
        // $prefectures=DB::table('population')->limit(47)->get();

        // 連想配列を作る
        $data = ['title' => 'politics',
                'prefecture' => $politics->prefecture,
                'pre_en' => $population ->pre_en,
                'parliament' => round(($politics->all_parliament/$population->population)*100,2),
                'official' => round(($politics->government_official / $population->population)*100,1),
                'voters' => round(($politics->voters / $population->population)*100),
                'non_voters' => round(($politics->non_voters / $population->population)*100),
                'politics'=> $politics,
                'Q2_1' => round(($politics->member_country/$politics->all)*100 ,2),
                'Q2_2' => round(($politics->member_prefecture / $politics->all)*100, 1),
                'Q2_3' => round(($politics->member_city / $politics->all)*100, 1),
                'Q2_4' => round(($politics->member_village / $politics->all)*100, 1),
                'Q2_6' => round((($politics->government_official + $politics->civil_servant )/ $politics->all) * 100, 1),
                'Q3' => $expenditure->all,
                'Q3_1' => round(($expenditure->parliament/$expenditure->all)*100,1),
                'Q3_2' => round(($expenditure->general_affairs / $expenditure->all) * 100, 1),
                'Q3_3' => round(($expenditure->civilian / $expenditure->all) * 100, 1),
                'Q3_4' => round(($expenditure->hygiene / $expenditure->all) * 100, 1),
                'Q3_5' => round(($expenditure->labor / $expenditure->all) * 100, 1),
                'Q3_6' => round(($expenditure->aAgriculture / $expenditure->all) * 100, 1),
                'Q3_7' => round(($expenditure->industry / $expenditure->all) * 100, 1),
                'Q3_8' => round(($expenditure->public_works / $expenditure->all) * 100, 1),
                'Q3_9' => round(($expenditure->police / $expenditure->all) * 100, 1),
                'Q3_10' => round(($expenditure->fire_fighting / $expenditure->all) * 100, 1),
                'Q3_11' => round(($expenditure->education / $expenditure->all) * 100, 1),
                'Q3_12' => round(($expenditure->recovery / $expenditure->all) * 100, 1),
                'Q3_13' => round(($expenditure->public_debt/$expenditure->all)*100,1),
                'Q3_14' => round(($expenditure->spending/$expenditure->all)*100,1)
            ];

        // view()メソッドの第一引数はbladeファイル。第二引数に連想配列を設定するとviewとsub viewに変数を渡せる
        return view('layouts.politics', $data);

        // returnの後にhtmlを直接記載できる
    }

    public function religion(){

        $pre = '秋田';
        $religion = DB::table('religion')->where('prefecture',$pre)->first();

        $data = ['title' => 'religion',
                'pre_en' => $religion->pre_en,
                'Q1'=> $religion,
                'Q1_1'=> round(($religion->shinto/$religion->group)*100,2),
                'Q1_3' => round(($religion->buddhism / $religion->group) * 100, 2),
                'Q1_5' => round(($religion->christ / $religion->group) * 100, 2),
                'Q1_7' => round(($religion->other / $religion->group) * 100, 2),
            'Q1_2' => round(($religion->shinto_m / $religion->all) * 100, 2),
            'Q1_4' => round(($religion->buddhism_m / $religion->all) * 100, 2),
            'Q1_6' => round(($religion->christ_m / $religion->all) * 100, 2),
            'Q1_8' => round(($religion->other_m / $religion->all) * 100, 2), 

            
            ];

        return view('layouts.religion', $data);
    }

    public function society()
    {

        $pre = '千葉';
        $age = DB::table('age')->where('prefecture', $pre)->first();
        $crime = DB::table('crime')->where('prefecture', $pre)->first();

        $data = [
            'title' => 'society',
            'pre_en' => $age->pre_en,
            'Q1' => $age,
            'Q1_1' => round(($age->a0_4 / $age->population) * 100, 1,),
            'Q1_2' => round(($age->a5_9 / $age->population) * 100, 1,),
            'Q1_3' => round(($age->a10_14 / $age->population) * 100, 1,),
            'Q1_4' => round(($age->a15_19 / $age->population) * 100, 1,),
            'Q1_5' => round(($age->a20_24 / $age->population) * 100, 1,),
            'Q1_6' => round(($age->a25_29 / $age->population) * 100, 1,),
            'Q1_7' => round(($age->a30_34 / $age->population) * 100, 1,),
            'Q1_8' => round(($age->a35_39 / $age->population) * 100, 1,),
            'Q1_9' => round(($age->a40_44 / $age->population) * 100, 1,),
            'Q1_10' => round(($age->a45_49 / $age->population) * 100, 1,),
            'Q1_11' => round(($age->a50_54 / $age->population) * 100, 1,),
            'Q1_12' => round(($age->a55_59 / $age->population) * 100, 1,),
            'Q1_13' => round(($age->a60_64 / $age->population) * 100, 1,),
            'Q1_14' => round(($age->a65_69 / $age->population) * 100, 1,),
            'Q1_15' => round(($age->a70_74 / $age->population) * 100, 1,),
            'Q1_16' => round(($age->a75_79 / $age->population) * 100, 1,),
            'Q2_1' => round(($crime->q/$crime->all)*100,1),
            'Q2_2' => round(($crime->w / $crime->all) * 100, 1),
            'Q2_3' => round(($crime->e / $crime->all) * 100, 1),
            'Q2_4' => round(($crime->r / $crime->all) * 100, 1),
            'Q2_5' => round(($crime->t / $crime->all) * 100, 1),
            'Q2_6' => round(($crime->y / $crime->all) * 100, 1),
            'Q2_7' => round(($crime->u/$crime->all)*100,1),
            'Q2_8' => round(($crime->i / $crime->all) * 100, 1),
            'Q2_9' => round(($crime->o / $crime->all) * 100, 1),
            'Q2_10' => $crime->all,


        ];

        return view('layouts.society', $data);
    }
}
