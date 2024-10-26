<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/registration', function () {
    return view('registration');
})->middleware(['auth'])->name('registration');

Route::get('/animal', function () {
    return view('animal');
})->middleware(['auth'])->name('animal');

Route::get('/service', function () {
    return view('service');
})->middleware(['auth'])->name('service');

Route::get('/product', function () {
    return view('product');
})->middleware(['auth'])->name('product');

Route::get('/vet', function () {
    return view('vet');
})->middleware(['auth'])->name('vet');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
