<?php

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

use Illuminate\Support\Facades\Route;


 Route::get('/register', "RegisterController@show")->name("register.show");
 Route::post('/register', "RegisterController@register")->name("register");

Route::prefix('shop')->group(function (){
    Route::get('', function () {
        return view("shop.home");
    });
});

Route::prefix('admin')->group(function(){
    Route::get('', function () {
        return view('admin.home');
    });
    Route::prefix('user')->group(function () {
        Route::get('', 'UserController@index')->name('admin.user.index');
    });
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');


Route::prefix('/category')->group(function () {
    Route::get('/', 'CategoryController@index')->name('category.index');
//    Route::get('/create', 'CategoryController@create')->name('category.create');
//    Route::post('/create', 'CategoryController@store')->name('category.store');
//    Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
//    Route::get('/{id}/update', 'CategoryController@edit')->name('category.edit');
//    Route::post('/{id}/update', 'CategoryController@update')->name('category.update');
});

