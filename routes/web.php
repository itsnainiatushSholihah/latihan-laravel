<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });



Route::get('/home1', [HomeController::class, 'home1']);

Route::get('/about1', [HomeController::class, 'about1']);
