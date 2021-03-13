<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home') ->name('home');

Route::view('/acerca', 'acerca')->name('acerca');


Route::get('/portafolio', 'PotfolioController@index')->name('Portafolio');


Route::view('/contacto', 'contacto')->name('contacto');


Route::post('Contacto', ('MenssagesController@store'))->name('contacto');