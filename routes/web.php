<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    // route here
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about','about')->name('about');
    // route here
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/services','services')->name('services');
    // route here
});

Route::controller(PortfolioController::class)->group(function(){
    Route::get('/portfolio','portfolio')->name('portfolio');
    // route here
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog','blog')->name('blog');
    // route here
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','contact')->name('contact');
    // route here
});