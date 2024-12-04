<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});//:8000のlocalhostページのルートコード

/*Route::get('home', function () {
    return view('home.index');
});*/

Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('create', 'App\Http\Controllers\CreateController@create');
Route::post('create', 'App\Http\Controllers\CreateController@create1');
Route::get('topic', 'App\Http\Controllers\TopicController@index');
