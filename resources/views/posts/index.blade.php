<x-login-layout>
<section>
  <section class="h2">
    <img src="images/icon1.png">投稿内容を入力してください。
  </section>
  <div id="post">
    <img src="images/post.png">
  </div>
</section>
<article>
  <div id="comment">
    <h3>
      <img src="images/icon1.png">
      admin
      <div id="day">
        2021-03-01 15:00
      </div>
    </h3>
        <p>自分が投稿した内容を表示します。<br>
        <br>
        投稿は最大150文字までとし、それ以上のテキストが入力フォームに打ち込まれた場合は投稿できないように設定をしてください。<br>
        <br>
        トップでは自分がフォローしている人の投稿も見ることができるようにします。</p>
  </div>
  <div id="side_icon">
    <a href="">
      <button id="edit_btn" type="submit">
          <img src="images/edit.png">
      </button>
    </a>
    <a href="">
      <button id="trash-h_btn" type="submit">
        <img src="images/trash-h.png">
      </button>
    </a>
  </div>
</article>

<article>
  <div id="comment">
    <h3>
      <img src="images/icon2.png">
      hoge
      <div id="day">
        2021-03-01 15:00
      </div>
    </h3>
    <p>フォローしている人が投稿した内容を表示します。</p>
  </div>
</article>

<article>
  <div id="comment">
    <h3>
      <img src="images/icon5.png">
      bar
      <div id="day">
        2021-03-01 15:00
      </div>
    </h3>
    <p>フォローしている人が投稿した内容を表示します。</p>
  </div>
</article>

<article>
  <div id="comment">
    <h3>
      <img src="images/icon1.png">
      admin
      <div id="day">
        2021-03-01 15:00
      </div>
    </h3>
    <p>自分が投降した内容を表示します。</p>
  </div>
  <div id="side_icon">
      <img src="images/edit.png">
      <img src="images/trash.png">
  </div>
</article>

</x-login-layout>
