<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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
    return view('index');
});

Route::name('admin.')->prefix('admin')->group(function () {
    Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::group(['middleware' => 'auth'], function () {
        Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
        Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
        Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
        Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
        Route::get('map', function () {return view('pages.maps');})->name('map');
        Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
        Route::get('table-list', function () {return view('pages.tables');})->name('table');
        Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    });
});

Route::prefix('admin')->group(function(){
    
});

