<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;

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
Route::get('prodotti/mostra/dettaglio/{product}',[ProductController::class,'goToDetail'])->name('product.detail');
// rotta alla pagina di MODIFICA deii dati di un record
Route::get('modifica/{product}',[ProductController::class,'goToEditElement'])->name('edit.element');
//rotta put PER INVIARE modifica dei dati
Route::put('aggiorna/{product}',[ProductController::class,'elementUpdate'])->name('put.element');
//rotta per ELIMINARE il record
Route::delete('cancella/{product}',[ProductController::class,'elementDelete'])->name('delete.element');

//SELLER
//rotta POST per l'invio dei dati seller
Route::post('registrazione_finale\invio',[SellerController::class,'create'])->name('seller.post');
//rotta per la visualizzazione del profilo utente   
Route::get('registrazione_finale',[SellerController::class,'goToFInalRegistration'])->name('seller.finalRegistration');
//rotta per mostrarei prodotti del cliente
Route::get('utente/prodotti',[ProductController::class,'goToUserProducts'])->name('user.products');