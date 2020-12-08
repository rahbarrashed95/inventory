<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

// Admin
Route::resource('/admin','AdminController');

// Author
Route::resource('/author', 'AuthorController');

// Category
Route::resource('/category','CategoryController');

// Post
Route::resource('/post','PostController');
