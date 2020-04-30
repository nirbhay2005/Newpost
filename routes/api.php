<?php

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

Route::post('authenticate', 'AuthenticationController@doLogin')->name('authenticate.store');
Route::middleware(['auth:api'])->group(function () {
    // All routes here are protected
    Route::resource('user','UserController');
    Route::resource('post','PostsController');
    Route::resource('comment','CommentsController');
    Route::get('users', 'UserController@index');
});
