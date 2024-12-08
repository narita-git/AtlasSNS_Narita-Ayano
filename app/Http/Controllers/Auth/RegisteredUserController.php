<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $input=$request->validate([
            'username' => ['required',
                           'min:2','max:12'],

            'mail' => ['required',
                       'min:5','max:40',
                       'unique:users',
                       'string','email:strict,dns,spoof','max:255','unique:users'],

            'password' => ['required',
                           'alpha_dash',
                           'min:8','max:20'],

            'password_confirmation' => ['confirmed:password'],
        ]);

            $user = User::create([
            'username' => $request->username,
            'mail' => $request->mail,
            'password' => Hash::make($request->password),
        ]);

        return [
          'username.required' => 'ユーザー名は必須です。',
          'email.required' => 'メールアドレスは必須です。',
          'email.unique' => 'メールアドレスはすでに使用されています。',
          'password' => 'パスワードは必須です。',
          'password_confirmation' => 'パスワードが一致していません。',
        ];

            return redirect('added');
    }

    public function added(): View
    {
        return view('auth.added');
    }
}
