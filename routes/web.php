<?php

Route::get('/', 'HomeController@home')->name('homePage');
Route::get('/article', 'HomeController@article')->name('articlePage');
Route::get('/login', 'HomeController@logInPage')->name('logInPage');
