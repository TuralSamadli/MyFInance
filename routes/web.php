<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
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

Route::get('/',[HomePageController::class, 'index'])->name('home');
Route::get('/search',[HomePageController::class, 'search'])->name('search');
Route::post('/message',[MessagesController::class,'user_messages'])->name('message');
Route::prefix('control')->group(function () {

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
// Route::middleware(['auth'])->group(function () {

Route::get('/',[DashboardController::class, 'index']);
Route::get('/about',[AboutController::class,'edit'])->name('about.edit');
Route::post('/about',[AboutController::class,'update'])->name('about.update');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update',[BlogController::class,'update'])->name('blog.update');
Route::post('/blog/delete',[BlogController::class,'delete'])->name('blog.delete');
Route::get('/service',[ServiceController::class,'index'])->name('service.index');
Route::get('/service/edit',[ServiceController::class,'edit'])->name('service.edit');
Route::post('/service/update',[ServiceController::class,'update'])->name('service.update');
Route::post('/service/delete',[ServiceController::class,'delete'])->name('service.delete');
Route::get('/message',[MailController::class,'index'])->name('message.index');
Route::post('/message/deleted',[MailController::class,'delete'])->name('message.delete');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
// });