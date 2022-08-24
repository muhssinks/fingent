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
    return view('welcome');
});
Route::post('url-post', [
    'as' => 'url.post',
    'uses' => 'App\Http\Controllers\HomeController@urlPost'
]);

Route::get('error', function () {
    return view('error');
});

Route::get('{slug}',  [
    'as' => 'url.get',
    'uses' => 'App\Http\Controllers\HomeController@urlGet'
]);
