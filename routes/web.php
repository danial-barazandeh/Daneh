<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
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
Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();
 
    $user = User::updateOrCreate([
        'google_id' => $googleUser->id,
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'google_token' => $googleUser->token,
    ]);
 
    Auth::login($user);
 
    return redirect('dashboard');
});

Route::get('/', function () {
    $posts = Post::with('image')->with('user')->get();
    return view("home", compact('posts'));
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    if($user)
        return view("dashboard", compact('user'));
    else
        return Socialite::driver('google')->redirect();
});

Route::get('/post/{id}', function (string $id) {
    $post = Post::find($id)->with('user')->first();
    return view("post", compact('post'));
});