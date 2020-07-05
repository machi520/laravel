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

        <p>{{$prefecture}}{{$politics->ken}}がもし100人の村なら、政治参加の視点で私はどこにいるのでしょうか？<br>
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
        それ以外の村人は{{$voters}}人が有権者（投票率は{{$politics->voting_rate}}％）、残りの{{$non_voters}}人は立候補や投票権を持っていません。
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
        <div class="syutten"><span>出典：統計局</span></div>
        <p>政治参加は村人の生活のインフラや人生のルールを変える強い力を持っています。立候補や投票の権利を最初から放棄せず、日ごろから政治の動きを注視しましょう。</p>
        </div>

        {{-- ---------- Q2---------- --}}
        <h3>Q2：被選挙権を使っている人は身近にいる？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q2" class="Q2">自ら使っている</label>
            <label><input type="radio" name="Q2" class="Q2">直接話をするほど身近にいる</label>
            <label><input type="radio" name="Q2" class="Q2">身近にはいない</label>
        </form>

        <div class="A2 display">
        <p>被選挙権とは、「みんなの代表として国会議員や都道府県知事・都道府県議会議員、市区町村長・市区町村議会議員に就くことのできる権利」です。<br>
        また、この村（{{$prefecture}}）では、議員の約{{round($politics->government_official + $politics->civil_servant/$politics->all_parliament)}}倍の職員が働いています。
        </p>

        {{-- pictgram --}}
        <div class="graph">
        <table>
            <tr>
                <th>国会議員</th>
                <td>{{$Q2_1}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q2_1); $i++)
                    <i class="fas fa-child"></i>
                @endfor</td>
            </tr>
            <tr>
            <th>{{$politics->ken}}議員</th>
                <td>{{$Q2_2}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q2_2); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>市区議員</th>
                <td>{{$Q2_3}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q2_3); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>町村議員</th>
                <td>{{$Q2_4}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q2_4); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                @if ($prefecture =='日本')
                <th>官庁職員・地方自治体職員</th>
                @else
                <th>地方自治体職員</th>
                @endif
                <td>{{$Q2_6}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q2_6); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
        </table>
        </div>
        <div class="syutten"><span>出典：統計局</span></div>
        <p >
        村は色々な思想・立場・人種の人々が生活している場所です。もしあなたが被選挙権を使用するなら、政治から遠い立場の村人や政治に無関心な村人とも多く関り心を配りましょう。それが村に本当に貢献するための第一歩です。
        <br>
        もちろん、立場が異なる村人の中にはあなたのことをよく思わない村人もいるので注意が必要です。（攻撃的な考えの村人の中には、実際に攻撃を実行する者もいます。そのような危ない村人は今すぐ遠ざけましょう。攻撃が届くと思わせてはいけません。）
        </p>
        </div>
        {{-- ---------- Q3---------- --}}
        <h3>Q3：{{$prefecture}}{{$politics->ken}}は何にお金をつかっているか知ってる？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q3" class="Q3">だいたい知っている</label>
            <label><input type="radio" name="Q3" class="Q3">全く知らない</label>
        </form>

        <div class="A3 display">
        <p>会計年度における国または地方公共団体の一切の支出を歳出といいます。<br>
        この村（{{$prefecture}}）では、平成○年度の歳出は{{number_format($Q3)}}円でした。
        </p>

        {{-- pictgram --}}
        <div class="graph">
        <table>
            <tr>
                <th>議会費</th>
                <td>{{$Q3_1}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_1); $i++)
                    <i class="fas fa-yen-sign"></i>
                @endfor</td>
            </tr>
            <tr>
            <th>総務費</th>
                <td>{{$Q3_2}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_2); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>民生費</th>
                <td>{{$Q3_3}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_3); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>衛生費</th>
                <td>{{$Q3_4}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_4); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>労働費</th>
                <td>{{$Q3_5}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_5); $i++)
                    <i class="fas fa-yen-sign"></i>
                @endfor</td>
            </tr>
            <tr>
            <th>農林水産業費</th>
                <td>{{$Q3_6}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_6); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>商工費</th>
                <td>{{$Q3_7}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_7); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>土木費</th>
                <td>{{$Q3_8}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_8); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>警察費</th>
                <td>{{$Q3_9}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_9); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>消防費</th>
                <td>{{$Q3_10}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_10); $i++)
                    <i class="fas fa-yen-sign"></i>
                @endfor</td>
            </tr>
            <tr>
            <th>教育費</th>
                <td>{{$Q3_11}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_11); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>.災害復旧費</th>
                <td>{{$Q3_12}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_12); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>公債費</th>
                <td>{{$Q3_13}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_13); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
            <tr>
                <th>諸支出金</th>
                <td>{{$Q3_14}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q3_14); $i++)
                    <i class="fas fa-yen-sign"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                    @endfor</td>
            </tr>
        </table>
        </div>
        <div class="syutten"><span>出典：統計局</span></div>
    
        </div>
</article>
