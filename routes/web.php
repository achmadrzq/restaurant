<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
route::get('/blog', function (){
    return view('blog');
});
route::resource('/blog', \App\Http\Controllers\BlogController::class);
Route::get('/user', [\App\Http\Controllers\BlogController::class, 'user']);

route::get('/search',[\App\Http\Controllers\BlogController::class, 'search'] );

route::get('/', [\App\Http\Controllers\BlogController::class,'home']);

Route::group(['middleware'=> 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware'=>'auth'], function() {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});