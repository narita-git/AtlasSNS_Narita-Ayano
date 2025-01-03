<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';

Route::get('top', [PostsController::class, 'index']);

Route::get('profile', [ProfileController::class, 'profile'])->name('profiles.profile');
// Route::get通信('URLの部品', [行先のController::class, 'profileメソッド'])->name('このルートの名前');

Route::post('profile', [ProfileController::class, 'profile'])->name('profile.update');

Route::get('search', [UsersController::class, 'search']);

Route::get('follow-list', [FollowsController::class, 'followList']);
Route::get('follower-list', [FollowsController::class, 'followerList']);

Route::get('logout',[AuthenticatedSessionController::class,'destroy']);
