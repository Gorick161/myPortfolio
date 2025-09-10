<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projekte', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/erfahrung', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/kontakt', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/lebenslauf', [PortfolioController::class, 'resume'])->name('resume');
