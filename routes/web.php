<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'AppController@home')->name('app.home');
    Route::get('/about', 'AppController@about')->name('app.about');
    Route::get('/contact', 'AppController@contact')->name('app.contact');
    Route::get('/listings', 'AppController@listings')->name('app.listings');
    Route::get('/listing', 'AppController@listing')->name('app.listing');
    Route::get('/error-404', 'AppController@error404')->name('app.error404');
});

Route::middleware('guest')->group(function(){
    Route::namespace('Form')->group(function(){
        Route::get('/login', 'LoginController@form')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::get('/register', 'RegisterController@form')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register');
        Route::post('/contact', 'AppController@form')->name('app.contact');
    });
});

Route::middleware('auth')->group(function(){
    Route::namespace('Dashboard')->group(function(){
        Route::get('/dashboard','DashboardController@dashboard_get')->name('dashboard');
        Route::get('/add-listing','DashboardController@add_listing_get')->name('add.listing');
        Route::post('/add-listing','DashboardController@add_listing_post')->name('add.listing');
    });
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});



