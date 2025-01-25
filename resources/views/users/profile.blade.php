<x-login-layout>
<div id="profile">
    <img src="images/icon1.png">
    <form action="/navigation" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h3>ユーザー名</h3>
            <input type="text" class="form-controller" id="name" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <h3>メールアドレス</h3>
            <input type="text" class="form-controller" id="email" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <h3>パスワード</h3>
            <input type="password"  class="form-controller" id="password">
        </div>

        <div class="form-group">
            <h3>パスワード確認</h3>
            <input id="password-confirm" type="password" class="form-controller"  required autocomplete="new-password">
        </div>

        <div class="form-group">
            <h3>自己紹介</h3>
            <input id="my_profile" class="form-controller">
        </div>

        <div class="form-group">
            <h3>アイコン画像</h3>
            <div id="icon">
            <label>
                <input type="file" class="file" ファイルを選択>


            </label>
            </div>
        </div>
    </form>
    <div id="update">
        <button class="update_btn" type="submit">
          更新
        </button>
    </div>
</div>

</x-login-layout>
