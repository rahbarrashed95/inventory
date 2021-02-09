<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Admin
Route::resource('/admin','AdminController');

// Author
Route::resource('/author', 'AuthorController');

// Category
Route::resource('/category','CategoryController');

// Post
Route::resource('/post','PostController');
Route::get('/post/test','PostController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
