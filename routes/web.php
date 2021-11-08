<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Initialize/Index');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/invoice', [InvoiceController::class, 'index'])
    ->name('invoice.index');






Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return Inertia::render('Profile');
})->name('profile');

