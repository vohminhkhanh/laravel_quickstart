<?php

use App\Task;

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/qstart','QuickStartController@loadTask') ;
 
Route::post('/insert-data','QuickStartController@addTask');

Route::delete('/delete/{tasks}','QuickStartController@deleteTask');

Route::get('language/{locale}', 'QuickStartController@language_i18n'); 
