        <div id="head">
            <h1>
                <a href=top><img src="images/atlas.png"></a>
            </h1>
            <div class="menu">
                <div id="name">
                    <p>{{ session('username') }}さん</p>
                </div>
                <input type="checkbox" id="menu_bar01" />
                <label for="menu_bar01"></label>
                <ul id="links01">
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
