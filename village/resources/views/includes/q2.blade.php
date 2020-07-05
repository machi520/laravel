<article class="post">
    <div class="container">
        <ol class="bread">
            <li><a href="#">TOP</a></li>
            <li><a href="#">CONTENTS</a></li>
            <li><a href="#">RELIGION</a></li>
        </ol>
        <h1>If {{$pre_en}} is a village of 100 people</h1>
        <h2>Religion</h2>
        <span class="img"><img src="{{asset('images/3129462_s.jpg')}}" alt=""></span>

    <p>{{$Q1->prefecture}}{{$Q1->ken}}がもし100人の村なら、宗教参加の視点で私はどこにいるのでしょうか？<br>
            これから質問に答えることで、{{$Q1->prefecture}}{{$Q1->ken}}での自分のポジションが少し明確になります。
        </p>

        {{-- ---------- Q1---------- --}}
        <h3>Q1：どのような立場から宗教参加している？</h3>
        <form action="#" name="">
            <label><input type="radio" name="Q1" class="Q1">宗教団体運営側で働いている</label>
            <label><input type="radio" name="Q1" class="Q1">自分または家が信者</label>
            <label><input type="radio" name="Q1" class="Q1">無神論者</label>
        </form>

        <div class="A1 display">
        <p>この村（{{$Q1->prefecture}}）では、{{number_format($Q1->group)}}の宗教団体・施設があり、{{number_format($Q1->all)}}人が教師として活動しています。
        </p>

        {{-- pictgram --}}
        <div class="graph">
            <p class="t_title">もし団体・施設の総数が100なら</p>
        <table>
            <tr>
                <th>神道</th>
                <td>{{$Q1_1}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q1_1); $i++)
                    <i class="fas fa-torii-gate"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>仏教</th>
                <td>{{$Q1_3}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q1_3); $i++)
                    <i class="fas fa-vihara"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            </tr>
                <th>キリスト教</th>
                <td>{{$Q1_5}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q1_5); $i++)
                    <i class="fas fa-church"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>諸宗教</th>
                <td>{{$Q1_7}}％</td>
                <td>@for ($i = 1; $i <= ceil($Q1_7); $i++)
                    <i class="fas fa-building"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
        </table>
        </div>
        <br>
        <div class="graph">
            <p class="t_title">もし教師の総数が100なら</p>
        <table>
            <tr>
                <th>神道教師</th>
                <td>{{$Q1_2}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_2); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>仏教教師</th>
                <td>{{$Q1_4}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_4); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>

            <tr>
                <th>キリスト教教師</th>
                <td>{{$Q1_6}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_6); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
            <tr>
                <th>諸宗教教師</th>
                <td>{{$Q1_8}}人</td>
                <td>@for ($i = 1; $i <= ceil($Q1_8); $i++)
                    <i class="fas fa-child"></i>
                    @if ($i%10 ==0)
                        <br>
                    @endif
                @endfor</td>
            </tr>
        </table>
        </div>
        <div class="syutten"><span>出典：統計局</span></div>

        <p>日本は政教分離により国教がなく、個人の信仰の自由が憲法により保証されています。
宗教は人生に活力や指針を与え、心の平穏を保つなどの効果以上に、時として生活のルールとして人を形作るものです。<br>
<br>
残念な一部の歴史が教えてくれるように異なる宗教に属する村人を理解するのはなかなか容易ではありません。しかし、「宗教人として」ではなくまずは「人として」お互いの存在・多様性を認めましょう。自分と異なる分類の村人を先入観で軽んじないでください。先入観を排して異なる相手と向き合うことが、今後のあなた自身の心の健康を保つためでもあります。<br>
<br>
ときに、強引な布教活動をする村人や、異なる宗教観を持つ者をよく思わない村人もいるので注意が必要です。（攻撃的な考えの村人の中には、実際に攻撃を実行する者もいます。そのような危ない村人は今すぐ遠ざけましょう。攻撃が届くと思わせてはいけません。）

</p>
        </div>
</article>
