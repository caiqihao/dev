<?php


use Illuminate\Support\Facades\Route;

Route::get('message', function () {
    return "success";
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('message', function () {
       dd('真棒');
    });
});
