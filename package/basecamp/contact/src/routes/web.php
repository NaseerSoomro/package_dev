<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::group(['namespace' => 'Basecamp\Contact\Http\Controllers'], function(){
    Route::get('/contact', 'ContactController@index');
    Route::get('/register', 'ContactController@create');
    Route::post('/contact', 'ContactController@contact');
    Route::post('/register', 'ContactController@store');
});
