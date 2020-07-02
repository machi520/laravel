<article class="post">
    <div class="container">
        <ol class="bread">
            <li><a href="#">TOP</a></li>
            <li><a href="#">CONTENTS</a></li>
            <li><a href="#">POLITICS</a></li>
        </ol>
        <h1>If Japan is a village of 100 people</h1>
        <h2>Politics</h2>
        <span class="img"><img src="{{asset('images/2333040_s.jpg')}}" alt=""></span>

        <p>日本がもし100人の村なら、政治参加の視点で私はどこにいるのでしょうか？<br>
            これからいくつかの質問に答えることで、日本での自分のポジションが少し明確になります。
        </p>
        <h3>Q1：どのような立場から政治参加している？</h3>
        <form action="#" name="">
            <label for="A1"><input type="radio" name="Q1" id="A1">国会議員・首長・地方議員</label>
            <label for="A2"><input type="radio" name="Q1" id="A2">官庁職員・地方自治体職員</label>
            <label for="A3"><input type="radio" name="Q1" id="A3">有権者・無権者</label>
        </form>
        <div class="discription">
        <p id="D1">日本がもし100人の村なら、この村には○人の議員たち、○人の職員が働いています。
            それ以外の村人は○人が有権者、残りの○人は立候補や投票権を持っていない人たちです。
            <i class="fas fa-child"></i>
        </p>

        {{-- pictgram --}}
        <table id="table"></table>

        {{-- map --}}
        <div id="map"></div>
        </div>

    </div>
        <script>
            // phpから値の取得
            let nihon = <?php echo json_encode($nihon) ?>;
            // let npop =nihon.population;
       
            let prefectures = <?php echo json_encode($prefectures) ?>;
        
            // let table = document.getElementById('table');

            // Object.keys(prefectures).forEach(function (key) {
            //     let tr = document.createElement('tr');
            //     let td = document.createElement('td');
            //     let td2 = document.createElement('td');
            //     let td3 = document.createElement('td');
            //     let kpop = prefectures[key].population;
            //     let kazu = Math.round(kpop/npop*1000)/10;

            //     for (let i = 0; i < kazu; i++) {
            //         let icon = document.createElement('i');
            //         icon.className = 'fas fa-child';
            //         td.appendChild(icon);
            //     }
            //     td3.textContent= prefectures[key].prefecture;
            //     td2.textContent=kazu;
            //     tr.appendChild(td3);
            //     tr.appendChild(td2);
            //     tr.appendChild(td);
                
            //     table.appendChild(tr);
                
            // });

// var obj = [
//   {id:3542,place:'赤坂'},
//   {id:8293,place:'青山'},
//   {id:2581,place:'目黒'}
// ];

// var matched = obj.filter(function(obj) {
//   console.log(obj.place.match(/赤/));
// });

// let aaaa = prefectures.filter(function (ooo) {
//     console.log(ooo.prefecture.match(/北/));
// })
        

    
    let theaterID = '北海道'  // 探すID
    let target = prefectures.filter(function(object) {
    // idが「1」の配列のみ返します。
    return object.id == theaterID
}).shift()
        console.log(target);
    </script>

</article>