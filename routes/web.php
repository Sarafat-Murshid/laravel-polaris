<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('contact');
})->name('contact.form');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
