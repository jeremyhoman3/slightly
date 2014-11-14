<?php

Route::resource('item', 'ItemsController');

Route::get('/contact', 'PagesController@showContact');
Route::get('/about', 'PagesController@showAbout');

