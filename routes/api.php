<?php

use Illuminate\Http\Request;

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('editor', 'EditorController');

Route::resource('/welcome', 'WelcomeController');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('homePage/index/{id}', [
    'as' => 'homePage.index',
    'uses' => 'HomePageController@index'
]);
Route::resource('/homePage', 'HomePageController', ['except' => ['index']]);
