<x-logout-layout>
  <body>
      <div id="clear">
        <h4 class="clear-h4"><strong>{{ session('username') }}</strong>さん
        <br>ようこそ！<strong>AtlasSNS</strong>へ</h4>
        <p class="clear-text">ユーザー登録が完了いたしました。
        <br>早速ログインをしてみましょう!</p>
      </div>
        <p class="login-btn"><a href="login">ログイン画面へ</a></p>

  </body>
</x-logout-layout>
