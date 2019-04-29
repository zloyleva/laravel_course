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


Route::get('/about', function (){
    return "About";
})->name('about');


Route::group(['prefix' => 'posts', 'as' => 'posts.'],function (){
    Route::get('/', function (){
        return "
        
        <div>Posts</div>
        <a href='".route('about')."'>About</a>
        <a href='".route('posts.show', ['id' => 1])."'>Post #1</a>
        
        ";
    })->name('index');

    Route::get('/{id}', function (){
        return "Posts";
    })->name('show');

    Route::post('/', function (){
        return "Posts";
    });
});
