<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::view('/','pages.home.index')->name('home');
Route::view('/about','pages.about')->name('about');
Route::view('/apartments','pages.apartments')->name('apartments');
Route::view('/gallery','pages.gallery')->name('gallery');

Route::view('/apartments/arena-dream-a3a','pages.apartments.apartment-1')->name('apartment-1');

Route::view('/contact','pages.contact.index')->name('contact');
