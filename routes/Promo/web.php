<?php

use App\Http\Controllers\PromosController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [PromosController::class, 'getPromoCode'])->name('promos.register');

Route::get('/verify/{promo_code?}', [PromosController::class, 'verify'])->name('promos.verify');

Route::get('/search', [PromosController::class, 'check'])->name('promos.verify.manual');

Route::get('/', [ PromosController::class, 'index' ])->name('promos');