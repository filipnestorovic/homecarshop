<?php

use Illuminate\Support\Facades\Route;

Route::get('/{slug}/thankyou', [App\Http\Controllers\HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/{slug?}', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::post('/order', [\App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::post('/validatePhoneNumber', [App\Http\Controllers\HomeController::class, 'validatePhoneNumber'])->name('validatePhoneNumber');
