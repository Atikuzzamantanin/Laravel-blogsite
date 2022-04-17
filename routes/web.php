<?php

use Illuminate\Support\Facades\Route;

//Website Route list
Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/category/{slug}', 'FrontEndController@category')->name('website.category');
Route::get('/contact', 'FrontEndController@contact')->name('website.contact');
Route::get('/post/{slug}', 'FrontEndController@post')->name('website.post');


// Admin Site Route List

Route::group(['prefix'=>'admin'], function(){

    Route::get('/','DashboardController@index');
    Route::resource('category','CategoryController');
    Route::resource('tag','TagController');
    Route::resource('post','PostController');
    Route::resource('footer','FooterController');
});
