<?php

use App\Http\Controllers\Promo\PromoController;
use Illuminate\Support\Facades\Route;

// Temp
$data = ['name'=>'Jean Langarica', 'phone'=>'3312526675', 'email'=>'jeanlangarica@outlook.com', 'amount_of_people'=>2, 'card'=>'4242', 'message'=>null, 'code'=>'srXEDta1N'];
Route::view('/email', 'mail.PromoCode', compact('data'))->name('promo.mail');

Route::get('/pdf', [PromoController::class, 'pdf'])->name('promo.pdf');