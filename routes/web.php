<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;

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

Route::get('/', [FrontController::class, 'home'])->name('home');


Route::get('/about', function () {
    return view('front.about');
});
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/services', [FrontController::class, 'service'])->name('service');
Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/user/check', [UserController::class, 'loginCheck'])->name('user.check');
Route::get('/user/home', [UserController::class, 'home'])->name('user.home');
Route::post('/user/store', [UserController::class, 'UserStore'])->name('user.store');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::put('/update-profile/{id}', [UserController::class, 'update'])->name('update-profile');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}/delete', [PostController::class, 'delete'])->name('post.delete');



Route::get('/admin/sliders', [SliderController::class, 'slider'])->name('admin.slider');
Route::get('/admin/add_slider', [SliderController::class, 'slider_form'])->name('front.add_slider');
Route::post('admin/sliders/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('/edit-slider/{id}', [SliderController::class, 'edit'])->name('edit-slider');
Route::put('/update-slider/{id}', [SliderController::class, 'update'])->name('update-slider');
Route::delete('/delete-slider/{id}', [SliderController::class, 'delete'])->name('slider.delete');

Route::get('/admin/service', [ServiceController::class, 'service'])->name('admin.service');
Route::get('/admin/add_service', [ServiceController::class, 'service_form'])->name('services.add_service');
Route::post('admin/services/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('edit-service');
Route::put('/update-service/{id}', [ServiceController::class, 'update'])->name('update-service');
Route::delete('/delete-service/{id}', [ServiceController::class, 'delete'])->name('service.delete');

Route::get('/admin/testimonial', [TestimonialController::class, 'testimonial'])->name('admin.testimonial');
Route::get('/admin/add_testimonial', [TestimonialController::class, 'testimonial_form'])->name('testimonials.add_testimonial');
Route::post('admin/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('edit-testimonial');
Route::put('/update-testimonial/{id}', [TestimonialController::class, 'update'])->name('update-testimonial');
Route::delete('/delete-testimonial/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');

Route::get('/admin/team', [TeamController::class, 'team'])->name('admin.team');
Route::get('/admin/add_team', [TeamController::class, 'team_form'])->name('team.add_team');
Route::post('admin/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/edit-team/{id}', [TeamController::class, 'edit'])->name('edit-team');
Route::put('/update-team/{id}', [TeamController::class, 'update'])->name('update-team');
Route::delete('/delete-team/{id}', [TeamController::class, 'delete'])->name('team.delete');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dash', [AdminController::class, 'home'])->name('admin.dash');
Route::get('/status/{id}/edit', [AdminController::class, 'StatusEdit'])->name('status.edit');
Route::put('/status/{id}/update', [AdminController::class, 'StatusUpdate'])->name('status.update');
Route::delete('/status/{id}/delete', [AdminController::class, 'delete'])->name('status.delete');
Route::get('/admin/users', [AdminController::class, 'ShowUsers'])->name('admin.users');
Route::delete('/users/{id}/delete', [AdminController::class, 'deleteUser'])->name('user.delete');
Route::get('/user/add', [AdminController::class, 'addUser'])->name('user.add');
Route::post('/user/save', [AdminController::class, 'UserSave'])->name('user.save');
Route::post('comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/post/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{id}/showPost', [PostController::class, 'showPost'])->name('posts.showPost');