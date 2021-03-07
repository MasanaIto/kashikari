<?php

Auth::routes();
Route::get('/', 'LandingController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'ArticleController@index')->name('articles.index');
    Route::resource('/articles', 'ArticleController')->except(['index']);

    Route::get('/users', 'UserController@index')->name('users.index');
});
