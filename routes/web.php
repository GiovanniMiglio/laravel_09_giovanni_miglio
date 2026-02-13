<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnuncioController;



Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/annunci/create', [AnnuncioController::class, 'create'])->name('annunci.create');
Route::post('/annunci', [AnnuncioController::class, 'store'])->name('annunci.store');
Route::get('/annunci', [AnnuncioController::class, 'index'])->name('annunci.index');