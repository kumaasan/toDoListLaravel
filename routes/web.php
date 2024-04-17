<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\FormController::class, 'index']);

Route::post('/', [\App\Http\Controllers\FormController::class,'store'])->name('marioform.store');

Route::get('/add', [\App\Http\Controllers\TaskController::class, 'index'])->name('dodawanie');

Route::get('/display', [\App\Http\Controllers\TaskController::class, 'getTask'])->name('wyswietl');

Route::get('/update', [\App\Http\Controllers\TaskController::class, 'updateTask'])->name('aktualizowanie');
