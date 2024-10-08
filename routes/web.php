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

Route::get('/social-networks', [SatisfactionSurveyController::class, 'socials'])->name('socials');


Route::get('/satisfaction-survey/count/results', [SatisfactionSurveyController::class, 'results'])->name('satisfaction-survey.results');


// Construction pages

Route::get('/recomended-rooms', function () {return view('recomended-rooms.index');})->name('recomended-rooms');

Route::get('/direct-booking', function() {
    return redirect('https://hotels.cloudbeds.com/reservation/Y4Crx5');
})->name('direct-booking');
