<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('products', 'products')->name('products');
Route::view('pdv', 'pdv')->name('pdv');
Route::view('faq', 'faq')->name('faq');



