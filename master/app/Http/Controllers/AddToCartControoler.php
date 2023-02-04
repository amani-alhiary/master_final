<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddToCartControoler extends Controller
{
    public function storeStepOne(Request $request)
    {
     
        $validated = $request->validate([
            
            'book_id' => ['required'],
            'quantity' => ['required'], 
        ]);
        $quantity = array();
        $ids = array();
        if (session()->has('cart')) {
            session()->put("cart.books.$request->book_id", $request->quantity);

         
        } else {
        $cart = [
            'books' => [
                $request->book_id => $request->quantity
            ]
        ];
        session()->put('cart', $cart);
        }

        foreach (session()->get('cart.books') as $key => $value) {
            array_push($ids,$key);
            array_push($quantity,$value);

        }
        $books = DB::table('books')
            ->whereIn('id', $ids)
            ->get();

        $cart= session('cart.books');
        // dd(session('cart'));
        // return view('pages.cart', compact('cart','books','ids'));
        return redirect()->route('cart.index')
        ->with('success', 'Item had been added successfully.');

    }

    
    
}
