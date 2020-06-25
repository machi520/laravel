# blade
resources/viewsフォルダに配置。拡張子は「.blade.php」。<br>
webブラウザに表示されるhtmlのようにrendering担当。<br>
html文のなかにbladeの記述をする。blade部分は< ?php ?>の代わりになる。

## レイアウト・継承
webブラウザの1画面を作るのに、レイアウトだけでも「親（内容とデザイン）と複数の子（内容）のテンプレート、複数の外部テンプレートや外部部品」を使う。<br>
親テンプレートをwebブラウザで呼び出すと、外部テンプレートや外部部品が取り込まれ、子の内容でextendsされてブラウザ表示される。
### 親テンプレート
- views/layoutsに配置するのが慣例？子を複数持てる。
- @yield('name') <br>
場所だけ確保。常に子テンプレートで親毎の内容を記述しする
- @section('name')...@show <br>
場所確保と共通化する部分の内容の記述ができる。子のテンプレートでは追加内容を記述する<br>
親テンプレートでの@sectionは@showで閉じる。@showの場所に子の内容が割り当てられる。
- @include('folder.file')<br>
場所だけ確保<br>
外部のテンプレートを取り込む。require_once()のようなもの。<br>
controllerから親に渡された変数はsub view内でも使うことができる。<br>
@include('folder.file',[ 'variable name'=>'variable'])で変数を渡すこともできる。
- @component('folder.file')...@endcomponent<br>
場所の確保と渡す変数を指定。<br> 
外部の部品を取り込む。こっちもrequire_once()のようなもの<br>
@slot('variable name') variable @endslot 変数を渡すスロットは複数記載できる。
### 子テンプレート
- views直下に配置するのが慣例？親は1つだけ。
- @extends('folder.file')で親テンプレートを読み込む
- @section('name') @parent...@endsectionの内容を割り当てる <br>
親テンプレートの同じnameの@yieldや@section...@showへ割り当てられる。nameはhtmlのid属性のよう <br>
@parentを2行目に入れると親で記述した内容を継承して、追加で子の内容を割り当てる。
- @section('name','hogehoge') <br>
単に値を設定したい場合は第二引数に値hogehogeを指定。
### sub view
外部テンプレート。
- views/include に配置するのが慣例？ <br>
- @yieldや@section...@showを使って子テンプレートを持てる。<br>
（親子の中間に入れると親子関係が複雑になる）
- 普通にhtmlを記載してもよい。例：head,header,footerなど<br>
controllerから親に渡された変数はsub view内でも使うことができる。<br>
変数を受け取る箇所は{{}}で記載。
### component
外部部品。
- views/component に配置するのが慣例？<br>
- 普通にhtmlを記載してもよい。例：head,header,footerなど<br>
変数を受け取る箇所は{{}}で記載。

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