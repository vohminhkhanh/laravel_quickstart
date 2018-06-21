<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qstart','QuickStartController@index') ;
 
Route::post('/insert-data','QuickStartController@addTask');

Route::delete('/delete/{tasks}','QuickStartController@deleteTask');

Route::get('language/{locale}', 'QuickStartController@changeLanguage'); 
