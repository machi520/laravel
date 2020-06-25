# blade
resources/viewsフォルダに配置。拡張子は「.blade.php」。<br>
webブラウザに表示されるhtmlのようにrendering担当。<br>
html文のなかにbladeの記述をする。< ?php ?>の代わりになる。

## directive
@hogehohe...@endhogehoge  最後は@end何とかになる。
例： @if(条件)...@else...@endif  
- if,empty,isset  条件分岐
- for,foreach,while  繰り返し
    - loop  繰り返しの現在の状態を調べる
- break,continue  中断終了・中断次へ  
- <forme>タグの中に@csrfでCSRF対策
## 値の表示
- {{   }}    値・変数・式・関数を{{}}で囲んで記述できる。まさに< ?php ?>の代わりになる。<br>
htmlエスケープされる。
- {!!   !!}   値・変数・式・関数を{!! !!}で囲むとhtmlエスケープされない。
