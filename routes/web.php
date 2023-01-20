<?php

use App\Http\Controllers\Front\RondaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RondaController::class, 'index'])->name('home');

Route::get('/rooms', [RondaController::class, 'rooms'])->name('rooms');

Route::get('/installations', [RondaController::class, 'installations'])->name('installations');

Route::get('/visita-guadalajara', [RondaController::class, 'visit'])->name('visit');

Route::get('/services', [RondaController::class, 'services'])->name('services');

Route::get('/contact', [RondaController::class, 'contact'])->name('contact');

Route::post('/contact', [RondaController::class, 'contactStore'])->name('contact.store');


// Construction pages

Route::get('/recomended-rooms', function () {return view('recomended-rooms.index');})->name('recomended-rooms');
