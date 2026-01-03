<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
