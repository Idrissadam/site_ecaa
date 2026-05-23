<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcaaController;
use App\Http\Controllers\ContactController;

Route::get('/', [EcaaController::class, 'home'])->name('home');
Route::get('/a-propos', [EcaaController::class, 'about'])->name('about');
Route::get('/equipements', [EcaaController::class, 'equipment'])->name('equipment');
Route::get('/realisations', [EcaaController::class, 'achievements'])->name('achievements');
Route::get('/partenaires', [EcaaController::class, 'partners'])->name('partners');
Route::get('/actualites', [EcaaController::class, 'news'])->name('news');
Route::get('/contact', [EcaaController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
