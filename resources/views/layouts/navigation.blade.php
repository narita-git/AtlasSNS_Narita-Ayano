        <div id="head">
            <h1>
                <a href="top"><img src="images/atlas.png"></a>
            </h1>
            <div id="menu">
                <div id="name">
                    <p>{{ session('username') }}さん</p>
                </div>
                <div id="arrow"></div>
                <ul class="arrow_active">
                    <li><a href="top">ホーム</a></li>
                    <li><a href="{{route('profiles.profile')}}">プロフィール</a></li>
                    <?php
                    // session_start();
                    // echo $_SESSION["username"]."<br>";
                    // echo $_SESSION["password"]."<br>";
                    ?>
                    <li><a href="logout">ログアウト</a></li>
                </ul>
                <img src="images/icon1.png">
            </div>
        </div>
