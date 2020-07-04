# Javascriptとphp
配列と連想配列について

## phpの配列をjsで使うようにするにはjson形式で取得する。
let variable = <?php echo json_encode($array); ?>;

## Javascript
### 連想配列の作り方（波括弧）
- 後から中身を追加する場合は、まず空のオブジェクトを作る。
let obj = new Object(); またはlet obj = {};  ただの配列の時は[]にする。
- 追加する。<br>
obj.key = "value"; または obj[key] = "value";
- 最初から let obj = {key:"value",key2:"value2"...};としてもよい。<br>
- 多次元配列は  let obj = {key:{key2:"value2"}...};という感じ。配列の中に多次元配列は[{key:'value'},{},{},...];
### 配列に追加
- 先頭に追加<br>
array.unshift( "hoge" ) ;
- 末尾に追加<br>
arr.push( "hoge" ) ;
- 途中に追加<br>
arr.splice( 2, 0, "hoge" ) ; 第一引数は先頭からのスキップ数、第二引数はその後の削除数
### 連想配列からの取り出し方
- obj.keyでvalueが取り出せる。多次元配列の取り出しはobj.key1.key2...などで深堀する。
- json形式objectを扱う際、Object.keys(json_obj)に色々なメソッドを繋げて利用する
### Objectに対するメソッド (json_obj)
Object.keys(json_obj).method(function(key1){...});
- forEach  単純に順番に処理する。returnが無い（やってもundefinedになる）。<br>
Object.keys(json_obj).forEach(function(key1){ json_obj[key1].key2...});  
- filter  順番に確認し、条件に合う要素のみで作った新しい配列をreturnする。clamは変わらず。rowが減るだけ。<br>
Object.keys(json_obj).filter(function(obj){ return json_obj[key1].key...条件 });  <,>,==とかの条件。
- map  順番に配列の要素を更新して、新しい値での配列を作りreturnする。clamはreturnによる。<br>
Object.keys(json_obj).map(function(obj){ return json_obj[key1]key2...更新処理}); 
### 配列に対するメソッド（array)
- 
### データ型の変換
- parseInt()  文字型を整数に変換。小数点以下は切り捨て
- parseFloat()  文字列を実数に変換
### 四捨五入
- Math.


## php
### 連想配列の作り方（角括弧）
- 後から中身を追加する場合は、まず空のオブジェクトを作る。<br>
$obj = array();  または $obj = [];  ただの配列との違いはなし。
- 追加する<br>
$obj['key'] = 'value';
- 最初から $obj = array('key' => 'value', 'key' => 'value2'...);としてもよい。<br>
または、$obj = ['key' => 'value', 'key' => 'value2'...];
- 多次元配列は  $obj = ['key' => ['key' => 'value2']...];という感じ。
### 連想配列からの取り出し方
- array（配列・連想配列）なら、array[key]でvalueが取り出せる。array[key][key2]などで深堀する。
- objectの場合<br>
$obj->keyでvalueが取り出せる。多次元なら$obj->key1->key2...などで深堀する。
-objectの中にarrayがあって、その中にobjectがあるなら、$obj[key]->key2とやり方が混ざる。
### メソッド (多次元前提。json_objを順にobjに入れる) 
- foreach  単純に順番に処理する。<br>
foreach ($obj as $key => $value){ .$key...$value };
- array_search  指定したvalueを検索して、条件に合う最初のkeyを返す。
array_search('value', $array); 結果は1つのkey。
- array_keys()
### データ型の変換
phpはデータ型が柔軟。勝手に解釈してくれる。
### 四捨五入
- round(int,桁); 第二引数で、小数点第何位まで表示させるかを指定
- ceil(int) 切り上げ
- floor(int) 切り捨て
