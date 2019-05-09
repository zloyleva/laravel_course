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

Route::get('/', function () { // URI - laravel.loc/posts/1
    return view('welcome');
});

Route::get('/things', 'ThingsController@index');
Route::get('/things/{id}', 'ThingsController@show');
Route::post('/things', 'ThingsController@store');
Route::put('/things/{id}', 'ThingsController@update');
Route::delete('/things/{id}', 'ThingsController@destroy');

Route::get('/js_frameworks/method', 'JSFrameworksController@method')->name('js_frameworks.method');

Route::resources([
    '/js_frameworks' => 'JSFrameworksController',
    '/php_frameworks' => 'PHPFrameworksController'
]);
