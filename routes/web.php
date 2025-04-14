<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Home Page
Route::get('/', function () {
    return view('home'); // Loads your main one-page portfolio
})->name('home');

// Projects Page
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Contact Form Submit (POST only, form lives on home)
Route::get('/contact', [ContactController::class, 'submit'])->name('contact.submit');
