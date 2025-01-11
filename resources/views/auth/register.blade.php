<x-logout-layout>
  <body>
      <ul>
            <!-- 適切なURLを入力してください -->
        {!! Form::open(['url' => 'register']) !!}
        <h4>新規ユーザー登録</h4>
        <li>
          {{ Form::label('ユーザー名') }}
          {{ Form::text('username',null,['class' => 'input']) }}
        </li>
        <li>
          {{ Form::label('メールアドレス') }}
          {{ Form::text('email',null,['class' => 'input']) }}
        </li>
        <li>
          {{ Form::label('パスワード') }}
          {{ Form::text('password',null,['class' => 'input']) }}
        </li>
        <li>
          {{ Form::label('パスワード確認') }}
          {{ Form::text('password_confirmation',null,['class' => 'input']) }}
        </li>
        @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
        <li>
          <div id="btn">
            {{ Form::submit('新規登録',['class' => 'btn']) }}
          </div>
        </li>

          <p><a href="login">ログイン画面に戻る</a></p>
      </ul>
          {!! Form::close() !!}
  </body>
</x-logout-layout>
