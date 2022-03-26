<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/riwayatPendidikan', function () {
    return view('riwayatPendidikan');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/skill/{id}', function ($id) {
    return view('skillID', ['id' => $id]);
});

Route::get('/riwayatPekerjaan', function () {
    return view('riwayatPekerjaan');
});

Route::get('/hobi', function () {
    return view('hobi');
});

// Route::get('/Product/Produk1/namaproduk', function () {
//     return view('kelompokA.product');
// })->name('produksaya');

// Route::get('/Service', function () {
//     return view('kelompokA.service');
// });

// Route::get('/AboutUs', function () {
//     return view('kelompokB.aboutus');
// });
