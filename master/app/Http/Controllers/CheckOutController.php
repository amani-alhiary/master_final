<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index(Request $request)
    {
       
        return view('pages.checkout');
    }
    
    public function store(Request $request)
    {
        // dd($request);
     
        $validated = $request->validate([
            
            'total_price' => ['required'],
        ]);
   
        $price = [
            'totalprice' => [
                '1' => $request->total_price
            ]
        ];
        session()->put('price', $price);
     
        return redirect()->route('checkoutstepone.index')
        ->with('success', 'going to checkout.');

    }
}
