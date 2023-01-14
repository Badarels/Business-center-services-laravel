<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/sdl', function () {
//     return view('layouts.login2');
// });

// Route::get('/admin', function(){
//     return view('layouts.index');
// });

// Route::middleware(['auth','role:admin'])->group(function(){ 
//     //Route::resources('/login', UserController::class);

// });

// /*Route::group(['middleware' => ['role']], function () {
//     Route::get('role', 'HomeController@admin')->name('role');
// });*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
