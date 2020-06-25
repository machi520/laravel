# blade
resources/viewsフォルダに配置。拡張子は「.blade.php」。<br>
webブラウザに表示されるhtmlのようにrendering担当。<br>
html文のなかにbladeの記述をする。

## レイアウト・継承
webブラウザの1画面を作るのに、レイアウトだけでも「親（内容とデザイン）と複数の子（内容）のテンプレート」を使う。
親テンプレートをwebブラウザで呼び出すと、子の内容でextendsされてブラウザ表示される。
### 親テンプレート
- @yield('name') <br>
場所だけ確保。常に子テンプレートでテンプレート毎の内容を記述しする
- @section('name')...@show <br>
場所確保と共通化する部分の内容の記述ができる。子のテンプレートでは追加内容を記述する<br>
親テンプレートでの@sectionは@showで閉じる。@showの場所に子の内容が割り当てられる。<br>
### 子テンプレート
- @extends('folder.file')で親テンプレートを読み込む
- @section('name') @parent...@endsectionの内容を割り当てる <br>
親テンプレートの同じnameの@yieldや@section...@showへ割り当てられる。nameはhtmlのid属性のよう <br>
@parentを2行目に入れると親で記述した内容を継承して、追加で子の内容を割り当てる。
- @section('name','hogehoge') <br>
単に値を設定したい場合は第二引数に値hogehogeを指定。

## < ?php ?>の代わりになるblade記述
bladeは表示担当、演算含めた諸々の処理はcontrollerが担当。<br>
bladeの中での処理記述は必要最小限に。
### directive
@hogehohe...@endhogehoge  最後は@end何とかになる。
例： @if(条件)...@else...@endif  
- if,empty,isset  条件分岐
- for,foreach,while  繰り返し
    - loop  繰り返しの現在の状態を調べる
- break,continue  中断終了・中断次へ  
- <forme>タグの中に@csrfでCSRF対策
### 値の表示
- {{   }}    値・変数・式・関数を{{}}で囲んで記述できる。まさに< ?php ?>の代わりになる。<br>
htmlエスケープされる。
- {!!   !!}   値・変数・式・関数を{!! !!}で囲むとhtmlエスケープされない。