<article class="post">
    <div class="container">
        <ol class="bread">
            <li><a href="#">TOP</a></li>
            <li><a href="#">CONTENTS</a></li>
            <li><a href="#">POLITICS</a></li>
        </ol>
        <h1>If {{$pre_en}} is a village of 100 people</h1>
        <h2>Politics</h2>
        <span class="img"><img src="{{asset('images/2333040_s.jpg')}}" alt=""></span>

        <p>{{$prefecture}}がもし100人の村なら、政治参加の視点で私はどこにいるのでしょうか？<br>
            これからいくつかの質問に答えることで、{{$prefecture}}での自分のポジションが少し明確になります。
        </p>

        {{-- ---------- Q1---------- --}}
        <h3>Q1：どのような立場から政治参加している？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q1" class="Q1">国会議員・首長・地方議員</label>
            <label><input type="radio" name="Q1" class="Q1">官庁職員・地方自治体職員</label>
            <label><input type="radio" name="Q1" class="Q1">有権者・無権者</label>
        </form>

        <div class="A1 display">
        <p>この村（{{$prefecture}}）では、{{round($parliament)}}人の議員たち、{{round($official)}}人の職員が働いています。<br>
        それ以外の村人は{{$voters}}人が有権者、残りの{{$non_voters}}人は立候補や投票権を持っていない人たちです。
        </p>

        {{-- pictgram --}}
        <div class="graph">
        <table>
            <tr>
                <th>国会議員・首長・地方議員</th>
                <td>{{$parliament}}人</td>
                <td>@for ($i = 1; $i <= ceil($parliament); $i++)
                    <i class="fas fa-child"></i>
                @endfor</td>
            </tr>
            <tr>
                <th>官庁職員・地方自治体職員</th>
                <td>{{$official}}人</td>
                <td>@for ($i = 1; $i <= ceil($official); $i++)
                    <i class="fas fa-child"></i>
                @endfor</td>
            </tr>
            <tr>
                <th>有権者</th>
                <td>{{$voters}}人</td>
                <td>@for ($i = 1; $i <= ceil($voters); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>立候補や投票はできない</th>
                <td>{{$non_voters}}人</td>
                <td>@for ($i = 1; $i <= ceil($non_voters); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
        </table>
        </div>
        </div>
        {{-- ---------- Q2---------- --}}

</article>
