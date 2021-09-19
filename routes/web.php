<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KomikController;
use App\Models\Komik;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('komik', [KomikController::class, 'index']);

Route::get('/komik/detail/{post:slug}', [KomikController::class, 'detail']);

Route::get('/komik/tambah', [KomikController::class, 'tambah']);
Route::post('/komik/prosesTambah', [KomikController::class, 'prosesTambah']);

Route::get('/komik/ubah/{post:slug}', [KomikController::class, 'ubah']);
Route::post('/komik/prosesUbah/{post:slug}', [KomikController::class, 'prosesUbah']);

Route::get('/komik/hapus/{post:id}', [KomikController::class, 'hapus']);
