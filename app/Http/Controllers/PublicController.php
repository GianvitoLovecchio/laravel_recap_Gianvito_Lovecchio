<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['goToAdd']),
        ];
    }

    public function goToHomepage() {
        return view('homepage');
    }

    public function goToCOntact() {
        return view('contact.contact');
    }

    public function goToadd() {
        return view('product.add');
    }

}
