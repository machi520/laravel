<article class="post">
    <div class="container">
        <ol class="bread">
            <li><a href="#">TOP</a></li>
            <li><a href="#">CONTENTS</a></li>
            <li><a href="#">SOCIETY</a></li>
        </ol>
        <h1>If {{$pre_en}} is a village of 100 people</h1>
        <h2>Society</h2>
        <span class="img"><img src="{{asset('images/449266_s.jpg')}}" alt=""></span>

    <p>{{$Q1->prefecture}}{{$Q1->ken}}がもし100人の村なら、社会の視点で私はどこにいるのでしょうか？<br>
            これから質問に答えることで、{{$Q1->prefecture}}{{$Q1->ken}}での自分のポジションが少し明確になります。
        </p>

        {{-- ---------- Q1---------- --}}
        <h3>Q1：どの年齢層？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q1" class="Q1">20歳未満</label>
            <label><input type="radio" name="Q1" class="Q1">20歳以上40歳未満</label>
            <label><input type="radio" name="Q1" class="Q1">40歳以上60歳未満</label>
            <label><input type="radio" name="Q1" class="Q1">60歳以上</label>
        </form>

        <div class="A1 display">
        <p>この村（{{$Q1->prefecture}}）の総人口は約{{number_format($Q1->population)}}人です。
        </p>

        {{-- pictgram --}}
        <div class="graph">
        <p class="t_title">もし{{$Q1->prefecture}}{{$Q1->ken}}が100人の村なら</p>
        <table>
            <tr>
                <th>0～4歳</th>
                <td>{{$Q1_1}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_1); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>5～9歳</th>
                <td>{{$Q1_2}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_2); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            </tr>
                <th>10～14歳</th>
                <td>{{$Q1_3}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_3); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>15～19歳</th>
                <td>{{$Q1_4}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_4); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>20～24歳</th>
                <td>{{$Q1_5}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_5); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>25～29歳</th>
                <td>{{$Q1_6}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_6); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>30～34歳</th>
                <td>{{$Q1_7}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_7); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>35～39歳</th>
                <td>{{$Q1_8}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_8); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>40～44歳</th>
                <td>{{$Q1_9}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_9); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>45～49歳</th>
                <td>{{$Q1_10}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_10); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>50～54歳</th>
                <td>{{$Q1_11}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_11); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>55～59歳</th>
                <td>{{$Q1_12}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_12); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>60～64歳</th>
                <td>{{$Q1_13}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_13); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>65～69歳</th>
                <td>{{$Q1_14}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_14); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>70～74歳</th>
                <td>{{$Q1_15}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_15); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>75歳～</th>
                <td>{{$Q1_16}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_16); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>

            
        </table>
        </div>
        <div class="syutten"><span>出典：統計局</span></div>

        <p>村は色々な思想・立場・人種の人々の集まりです。公共の利益と人権の両方を尊重し、互いを理解するよう努力し多様性を認めましょう。<br>自分と異なる分類の村人を先入観で軽んじないでください。先入観を排して異なる相手と向き合うことが、今後のあなた自身の心の健康を保つためでもあります。<br>
            <br>
もちろん、村人の中にはあなたのことをよく思わない村人もいるので注意が必要です。（攻撃的な考えの村人の中には、実際に攻撃を実行する者もいます。そのような危ない村人は今すぐ遠ざけましょう。攻撃が届くと思わせてはいけません。）</p>
        </div>

                {{-- ---------- Q2---------- --}}
        <h3>Q2：犯罪はどれくらい発生しているか知っている？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q2" class="Q2">よく知っている</label>
            <label><input type="radio" name="Q2" class="Q2">あまり知らない</label>
        </form>

        <div class="A2 display">
        <p>この村（{{$Q1->prefecture}}）では、重要犯罪が年に約{{number_format($Q2_10)}}件発生しています。
        </p>

        {{-- pictgram --}}
        <div class="graph">
             <p class="t_title">もし重要犯罪の総数が100なら</p>
        <table>
            <tr>
                <th>殺人</th>
                <td>{{$Q2_1}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_1); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>強盗</th>
                <td>{{$Q2_2}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_2); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            </tr>
                <th>侵略強盗</th>
                <td>{{$Q2_3}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_3); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>放火</th>
                <td>{{$Q2_4}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_4); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>強制性交等</th>
                <td>{{$Q2_5}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_5); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>略奪誘拐・人身売買</th>
                <td>{{$Q2_6}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_6); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>強制わいせつ</th>
                <td>{{$Q2_7}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_7); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>重要窃盗</th>
                <td>{{$Q2_8}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_8); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>侵入</th>
                <td>{{$Q2_9}}件</td>
                <td>@for ($i = 1; $i <= ceil($Q2_9); $i++)
                    <i class="fas fa-child"></i>
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
