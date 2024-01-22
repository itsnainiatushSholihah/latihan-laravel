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

// Route::get('/coba', function () {

//     $nama = 'Kocheng';
//     $kelas = 'Aerobik';
//     $hobi = 'Makan';
//     $nilai = '85';
    

//     return view('coba', ['nama' => 'Kocheng', 'kelas' => 'Aerobik', 'hobi'=> 'Makan', 'nilai' => '85']);
// });



Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

// Route::get('/test', [HomeController::class, 'test']);

// Route::get('/test/{id}', [HomeController::class, 'test']);

Route::get('/test', [HomeController::class, 'test']);

Route::post('/save', [HomeController::class, 'simpan']);

Route::get('/add', [HomeController::class, 'tambah']);