<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

//rotta HOMEPAGE
Route::get('/', [PublicController::class, 'goToHomepage'])->name('homepage');

//rotta FORM DI CONTATTO MAIL
Route::get('/contattaci',[PublicController::class,'goToContact'])->name('contact');
//rotta INVIO MAIL
Route::post('contattaci/invio-mail',[MailController::class,'sendMail'])->name('contact.send');

//rotta FORM AGGIUNTA ELEMENTO
Route::get('/prodotti/aggiungi',[PublicController::class,'goToAdd'])->name('product.add');
//rotta POST del FORM
Route::post('prodotti/aggiungi/submit',[ProductController::class,'productSubmit'])->name('product.submit');

//rotta MOSTRA TUTTO IL DB
Route::get('/prodotti/mostra',[ProductController::class,'goToShow'])->name('product.show');
//rotta DETTAGLIO PRODOTTO
Route::get('prodotti/mostra/dettagliio/{product}',[ProductController::class,'goToDetail'])->name('product.detail');
