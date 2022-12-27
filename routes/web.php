<?php

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

Route::get('/', function () {
    return view('layouts.login');
});

Route::get('/admin', function () {
    return view('layouts.index');
});

Route::middleware(['auth', 'role:admin'])->group(function(){ 
    Route::get('/private', function () {
        return 'Bonjour Admin';
    });

});

/*Route::group(['middleware' => ['role']], function () {
    Route::get('role', 'HomeController@admin')->name('role');
});*/
