<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('kalikali', 'App\Http\Controllers\RegBController@perkalian');

Route::post('kalikan', 'App\Http\Controllers\RegBController@perkalian2');