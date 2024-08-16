<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/shop', 'shop');
    Route::get('/blogs', 'blog');
    Route::get('/about-us', 'about');
});
