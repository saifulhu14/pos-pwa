<?php

use Illuminate\Support\Facades\Route;

// Route utama untuk SPA
Route::get('/{any}', function () {
    return view('app'); // Vue SPA akan hidup di sini
})->where('any', '.*');
