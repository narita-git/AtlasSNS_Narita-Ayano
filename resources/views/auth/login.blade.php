<x-logout-layout>
  <body>
        <!-- 適切なURLを入力してください -->
        {!! Form::open(['url' => 'login']) !!}
        <h4 class="login-h4">AtlasSNSへようこそ</h4>
      <ul>
          <li>
          {{ Form::label('メールアドレス') }}
          {{ Form::text('email',null,['class' => 'input']) }}
          </li>

          <li>
          {{ Form::label('パスワード') }}
          {{ Form::password('password',['class' => 'input']) }}
          </li>

          <li>
            <div id="btn">
              {{ Form::submit('ログイン',['class' => 'btn']) }}
            </div>
          </li>
        <p class="register"><a href="register">新規ユーザーの方はこちら</a></p>
      </ul>
        {!! Form::close() !!}
  </body>
</x-logout-layout>
