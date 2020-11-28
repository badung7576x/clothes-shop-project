<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([ 'namespace' => '\Modules\Administration\Http\Controllers'], function () {
    Route::post('/login', 'UserAPIController@login')->name('api.login');

    Route::group(['middleware' => 'auth.jwt'], function () {
        Route::post('/logout', 'UserAPIController@logout')->name('api.logout');
    });
});
