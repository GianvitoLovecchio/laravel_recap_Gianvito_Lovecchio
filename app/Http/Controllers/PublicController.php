<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
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
