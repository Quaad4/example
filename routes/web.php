<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'contact');

// Route::controller(JobController::class)->prefix('jobs')->group(function() {
//     Route::get('/', 'index');
//     Route::post('/', 'store');
//     Route::get('/create', 'create');
//     Route::get('/{job}', 'show');
//     Route::get('/{job}/edit', 'edit');
//     Route::patch('/{job}', 'update');
//     Route::delete('/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);