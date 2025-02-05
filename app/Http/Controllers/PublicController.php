<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
        return view('homepage', compact('products'));
    }

    public function goToContact() {
        return view('contact.contact');
    }

    public function goToAdd() {
        return view('product.add');
    }

}
