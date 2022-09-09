<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/user/check', [UserController::class, 'loginCheck'])->name('user.check');
Route::get('/user/home', [UserController::class, 'home'])->name('user.home');
Route::post('/user/store', [UserController::class, 'UserStore'])->name('user.store');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}/delete', [PostController::class, 'delete'])->name('post.delete');