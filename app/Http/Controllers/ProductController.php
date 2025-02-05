<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller 
{


    public function goToShow()
    {
        $products = Product::all();
        return view('product.show', compact('products'));
    }

    public function productSubmit(ProductRequest $request)
    {
        Auth::user()->Product()->create([
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'image' => $request->hasFile('image') ? $request->file('image')->store('img', 'public') : '/img/no_image.jpeg',
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'year' => $request->input('year'),
            'weight' => $request->input('weight'),
        ]);

        return redirect()->route('homepage')->with('status','Articolo inserito correttamente!');
    }
    
    //funzine MOSTRA pagina dettaglio
    public function goToDetail(Product $product){
        return view ('product.detail', compact('product'));
    }

    //funzione MOSTRA pagina form
    public function goToEditElement(Product $product){
        return view('product.update', compact('product'));
    }

    //funzione MODIFICA dati
    public function elementUpdate(ProductRequest $request, Product $product){
        $product->update([
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'user_id'=>Auth::user()->id,
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'image' => $request->hasFile('image') ? $request->file('image')->store('img', 'public') : '/img/no_image.jpeg',
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'year' => $request->input('year'),
            'weight' => $request->input('weight'),
        ]);
        return redirect (route('product.show'))->with('message','Prodotto aggiornato correttamente!');
    }

    public function elementDelete(Product $product){
        $product->delete();
        return redirect(route('product.show'))->with('message','Articolo eliminato correttamente');
    }

    public function goToUserProducts(){
        $product=Product::all();
        return view ('product.user_products',compact('product'));
    }
}
