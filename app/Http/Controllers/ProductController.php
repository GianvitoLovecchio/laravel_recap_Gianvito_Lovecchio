<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function goToShow()
    {
        $products = Product::all();
        return view('product.show', compact('products'));
    }

    public function productSubmit(ProductRequest $request)
    {

        Product::create([
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
    
    public function goToDetail(Product $product){
        return view ('product.detail', compact('product'));
    }

}
