<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

//rotta HOMEPAGE
Route::get('/', [PublicController::class, 'goToHomepage'])->name('homepage');
//rotta FORM DI CONTATTO MAIL
Route::get('/contattaci',[PublicController::class,'goToContact'])->name('contact');
//rotta FORM AGGIUNTA ELEMENTO
Route::get('/prodotti/aggiungi',[PublicController::class,'goToAdd'])->name('product.add');
Route::get('/prodotti/mostra',[PublicController::class,'goToShow'])->name('product.show');