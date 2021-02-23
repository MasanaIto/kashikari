<?php

Auth::routes();
Route::get('/', 'LandingController@index');
Route::get('/home', 'ArticleController@index');
