<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get("hienthihocsinh",'App\Http\Controllers\hocsinhController@gethocsinhs');

Route::get("timkiemtheoGender",'App\Http\Controllers\hocsinhController@gethocsinhsbyGender')->name('timkiemtheoGender');