<?php

use Illuminate\Support\Facades\Route;

Route::get('/belajar', function () {
    return view('welcome');
});

Route::get('/belajar', function (){
    echo '<h1> Hello World </h1>';
    echo '<p> Sedang belajar Laravel </p>';
});
  
Route::get('/mahasiswa', function () {
  return view('mahasiswa');
});
