<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(){
        return view('users.profile');
        // return view('フォルダ名.bladeの名前');
    }

    public function update(User $user, Request $request){
        $inputs = request()->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'required|confirmed|max:255|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $inputs['password'] = Hash::make($inputs['password']);

        $user->update($inputs);

        return back()->with('message', 'ユーザー情報を更新しました');
    }
}
