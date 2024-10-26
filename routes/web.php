<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

// Clientes
Route::get('/registration', function () {
    return view('registration.index');
})->middleware(['auth'])->name('registration');

// Animais
Route::get('/animal', function () {
    return view('animal.index');
})->middleware(['auth'])->name('animal');

// Serviços
Route::get('/service', function () {
    return view('service.index');
})->middleware(['auth'])->name('service');

// Produtos
Route::get('/product', function () {
    return view('product.index');
})->middleware(['auth'])->name('product');

// Veterinária
Route::get('/vet', function () {
    return view('vet.index');
})->middleware(['auth'])->name('vet');

// Financeiro
Route::get('/financial', function () {
    return view('financial.index');
})->middleware(['auth'])->name('financial');

// Usuários
Route::get('/user', function () {
    return view('user.index');
})->middleware(['auth'])->name('user');

// Rotas do perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota de autenticação
require __DIR__.'/auth.php';
