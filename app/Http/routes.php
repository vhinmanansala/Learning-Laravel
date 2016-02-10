<?php

Route::group(['middleware' => 'web'], function() {
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');
    
    Route::resource('articles', 'ArticlesController');
});