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

Route::group(['prefix' => 'administration', 'namespace' => '\Modules\Administration\Http\Controllers'], function() {
    Route::get('/', 'AdministrationController@index');

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('post-login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


    Route::group(['prefix' => 'admin', 'middleware'=>'web'], function () {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.post-login');
        Route::group(['middleware' => 'auth.admin'], function () {
            Route::get('/dashboard', 'AdministrationController@index')->name('admin.dashboard');
            Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
        });

    });
});
