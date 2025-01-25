<x-login-layout>
  <div id="search_top">
    <form method="get" id="search_box" action="http://127.0.0.1:8000/search">
      <input id="input_form" type="search" value="{{request('search')}}"name="search" placeholder="ユーザー名">
    </form>
    <input type="image" id="search_btn" src="images/search.png" alt="検索">
  </div>
    <ul class="search_list">
      <li>
        <h2>
          <img src="images/icon2.png">
          hoge
        </h2>
        <p class="btn"><a href="search">フォロー解除</a></p>
      </li>

      <li>
        <h2>
          <img src="images/icon7.png">
          foobar
        </h2>
        <p class="btn"><a href="search">フォローする</a></p>
      </li>

      <li>
        <h2>
          <img src="images/icon6.png">
          piyo
        </h2>
        <p class="btn"><a href="search">フォローする</a></p>
      </li>

      <li>
        <h2>
          <img src="images/icon4.png">
          hogehoge
        </h2>
        <p class="btn"><a href="search">フォローする</a></p>
      </li>

      <li>
        <h2>
          <img src="images/icon5.png">
          bar
        </h2>
        <p class="btn"><a href="search">フォロー解除</a></p>
      </li>

      <li>
        <h2>
          <img src="images/icon3.png">
          foo
        </h2>
        <p class="btn"><a href="search">フォローする</a></p>
      </li>
    </ul>
</x-login-layout>
