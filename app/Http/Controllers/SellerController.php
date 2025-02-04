<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function goToFInalRegistration(){
        return view('seller.registration');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Auth::user()->seller()->create([
            'companyName'=>$request->input('companyName'),
            'iva'=>$request->input('iva'),
            'contactEmail'=>$request->input('contactEmail'),
            'contactNumber'=>$request->input('contactNumber'),
            'buisnessAddress'=>$request->input('buisnessAddress'),
            'buisnessCity'=>$request->input('buisnessCity'),
            'companyWebSite'=>$request->input('companyWebSite'),
            'compiled'=>true
        ]);
        return redirect()->route('homepage')->with('status','Dati della compagni inseriti correttamente!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
