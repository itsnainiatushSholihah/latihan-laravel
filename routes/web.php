<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;




// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });



Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/menu/add', [MenuController::class, 'add']);

Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);

Route::get('/menu/{id}/delete', [MenuController::class, 'delete']);

Route::post('/menu/save', [MenuController::class, 'save']);



Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/add', [KategoriController::class, 'add']);

Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);

Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);

Route::post('/kategori/save', [KategoriController::class, 'save']);