<?php

use App\Http\Controllers\Controller;
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
Route::get('/home', [Controller::class,'index'])->name('Home');
Route::get('/strukturorganisasi', [Controller::class,'strukturorganisasi'])->name('strukturorganisasi');
Route::get('/profilpemimpin', [Controller::class,'profilpemimpin'])->name('profilpemimpin');
Route::get('/visidanmisi', [Controller::class,'visidanmisi'])->name('visidanmisi');
Route::get('/sejarah', [Controller::class,'sejarah'])->name('sejarah');
Route::get('/tupoksi', [Controller::class,'tupoksi'])->name('tupoksi');