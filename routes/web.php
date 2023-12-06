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
Route::view('/apartments', 'pages.apartments')->name('apartments');

Route::prefix('/apartments')->group(function () {
    Route::view('/arena-dream-a3a', 'pages.apartments.apartment-1')->name('apartment-1');
    Route::view('/arena-dream-d2b', 'pages.apartments.apartment-2')->name('apartment-2');
    Route::view('/rennes-areal-3', 'pages.apartments.apartment-3')->name('apartment-3');
    Route::view('/rennes-areal-6', 'pages.apartments.apartment-4')->name('apartment-4');
    Route::view('/isleta-marina', 'pages.apartments.apartment-5')->name('apartment-5');
});

Route::view('/gallery','pages.gallery')->name('gallery');

Route::prefix('/gallery')->group(function () {
    Route::view('/arena-dream-a3a', 'pages.gallery.apartment-1')->name('gallery-apartment-1');
    Route::view('/arena-dream-d2b', 'pages.gallery.apartment-2')->name('gallery-apartment-2');
    Route::view('/rennes-areal-3', 'pages.gallery.apartment-3')->name('gallery-apartment-3');
    Route::view('/rennes-areal-6', 'pages.gallery.apartment-4')->name('gallery-apartment-4');
    Route::view('/isleta-marina', 'pages.gallery.apartment-5')->name('gallery-apartment-5');
});

Route::view('/contact','pages.contact.index')->name('contact');
