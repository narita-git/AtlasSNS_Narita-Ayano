<x-login-layout>
<section>
  <!-- <section class="h2"> -->
    <img src="images/icon1.png">
    <textarea placeholder="投稿内容を入力してください。"></textarea>
  </section>
  <div id="post">
    <button type="button"> <img src="images/post.png"></button>
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
      <button class="edit_btn">
          <img src="images/edit.png">
      </button>
      <button class="trash-h_btn">
         <a href="images/trash.png"onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
          <img src="images/trash.png">
          <img src="images/trash-h.png">
         </a>
      </button>
  </div>
</article>

<dialog id="edit">
  <div class="edit_text">
  <p>自分が投稿した内容を表示します。</p>
  <p>投稿は最大150文字までとし、それ以上のテキストが入力フォームに打ち込まれた場合は投稿できないように設定をしてください。</p>
  <p class="font_red">編集画面が開いた際に、選択された投稿内容が初期で入っているようにする。<br>
  最大150字までとする。<br>
  編集ボタンを押したら編集内容を保存してTOPページを再読み込みする。</p>
  </div>
  <div class="edit_icon">
  <button class="edit_close"><img src="images/edit.png"></button>
  </div>
</dialog>

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
