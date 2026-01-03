<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
