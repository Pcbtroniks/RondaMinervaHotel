<?php

use App\Http\Controllers\Front\RondaController;
use App\Http\Controllers\Front\SatisfactionSurveyController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RondaController::class, 'index'])->name('home');

Route::get('/rooms', [RondaController::class, 'rooms'])->name('rooms');

Route::get('/installations', [RondaController::class, 'installations'])->name('installations');

Route::get('/visita-guadalajara', [RondaController::class, 'visit'])->name('visit');

Route::get('/services', [RondaController::class, 'services'])->name('services');

Route::get('/restaurant-media', [RondaController::class, 'restaurantMedia'])->name('restaurant-media.altern');

Route::get('/files/restaurant-menu.pdf', [RondaController::class, 'restaurantMedia'])->name('restaurant-media');

Route::get('/contact', [RondaController::class, 'contact'])->name('contact');

Route::post('/contact', [RondaController::class, 'contactStore'])->name('contact.store');

Route::get('/satisfaction-survey', [SatisfactionSurveyController::class, 'index'])->name('satisfaction-survey');

Route::post('/satisfaction-survey', [SatisfactionSurveyController::class, 'store'])->name('satisfaction-survey.store');


// Construction pages

Route::get('/recomended-rooms', function () {return view('recomended-rooms.index');})->name('recomended-rooms');
