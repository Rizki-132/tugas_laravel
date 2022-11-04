<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MahasiswaController;

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

Route::get('/welcome', function () {
    return 'Semangat belajar';
});

Route::get('/salam', function () {
    return view('halaman_salam');
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return '<ol>
                <li>nama : '.$nama.'</li>
                <li>Divisi : '.$divisi.'</li>
            </ol>';
});

Route::get('/mahasiswa', [MahasiswaController::class,'dataMahasiswa']);

Route::get('/nilai', [MahasiswaController::class,'nilaiMahasiswa']);