<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
    Route::post('/signup', [SignUpController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [PostController::class, 'index'])->name('posts.index');

    Route::delete('/logout', [LogoutController::class, 'store'])->name('logout');
});
