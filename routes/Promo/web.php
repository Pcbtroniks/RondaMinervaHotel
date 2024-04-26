<?php

use App\Http\Controllers\Promo\PromoController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [PromoController::class, 'getPromoCode'])->name('promos.register');

Route::get('/verify/{promo_code?}', [PromoController::class, 'verify'])->name('promos.verify');

Route::get('/search', [PromoController::class, 'check'])->name('promos.verify.manual');

Route::get('/', [ PromoController::class, 'index' ])->name('promos');

Route::get('/download-coupon/{promo_code}', [ PromoController::class, 'downloadCoupon' ])->name('promos.coupon.download');
Route::get('/view-coupon/{promo_code}', [ PromoController::class, 'pdf' ])->name('promos.coupon.view');