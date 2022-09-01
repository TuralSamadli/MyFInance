<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MailController;
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
Route::post('/message',[MessagesController::class,'user_messages'])->name('message');
Route::get('/control',[DashboardController::class, 'index']);
Route::get('/control/about',[AboutController::class,'edit'])->name('about.edit');
Route::post('/control/about',[AboutController::class,'update'])->name('about.update');
Route::get('/control/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/control/blog/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/control/blog/update',[BlogController::class,'update'])->name('blog.update');
Route::get('/control/service',[ServiceController::class,'index'])->name('service.index');
Route::get('/control/service/edit',[ServiceController::class,'edit'])->name('service.edit');
Route::post('/control/service/update',[ServiceController::class,'update'])->name('service.update');
Route::get('/control/message',[MailController::class,'index'])->name('message.index');