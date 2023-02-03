<?php

namespace Basecamp\Contact\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::group(['namespace' => 'Basecamp\Contact\Http\Controllers'], function(){
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@store');
});
