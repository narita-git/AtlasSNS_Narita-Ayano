<dialog id="trash">
  <p>この投稿を削除します。よろしいでしょうか？</p>
  <div id="dialog_button">
  <button id="OK">OK</button>
  <button id="close">キャンセル</button>
  </div>
</dialog>
       <div id="head">
            <h1>
                <a href="top"><img src="images/atlas.png"></a>
            </h1>
            <div id="menu">
                <div id="name">
                    <p>　{{ session('username') }}さん</p>
                </div>
                <div class="arrow active"></div>
                <ul class="arrow_box active">
                    <li class="arrow_list"><a href="top">HOME</a></li>
                    <li class="list_center"><a href="{{route('profiles.profile')}}">プロフィール編集</a></li>
                    <?php
                    // session_start();
                    // echo $_SESSION["username"]."<br>";
                    // echo $_SESSION["password"]."<br>";
                    ?>
                    <li class="arrow_list"><a href="logout">ログアウト</a></li>
                </ul>
                <img src="images/icon1.png">
            </div>
        </div>
