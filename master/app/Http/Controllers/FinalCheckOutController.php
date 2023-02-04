<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\UserBook;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FinalCheckOutController extends Controller
{
    public function store(Request $request)
    {
        $totalprice = $request->session()->get('price.totalprice');
        // dd($totalprice[1]);

        $request->validate([
            'user_id' => 'required',
            'country' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'card_number' => 'required',
            'postal_code' => 'required',
            'total_price' => $totalprice[1],

        ]);

      $input=array();

        $input = $request->all();
        Cart::create(
            [
                'user_id' => $request->user_id,
                'country' => $request->country,
                'address' => $request->address,
                'phone' => $request->phone,
                'card_number' => $request->card_number,
                'postal_code' => $request->postal_code,
                'total_price' => $totalprice[1],

                
            ]
        );
        // dd($input);
        // Cart::create($input);

        $orders = DB::table('carts')
                ->latest()
                ->first();
        // dd($orders->id);

        // dd(session('cart'));
        if (session()->has('cart.books')) {
        
            foreach (session()->get('cart.books') as $key => $value) {
           
                CartItem::create(
                    [
                        'cart_id' => $orders->id,
                        'book_id' => $key,
                        'quantity' => $value,
              
                    ]
                );
    
            }}

            if (session()->has('cart.usedbooks')) {
        
                foreach (session()->get('cart.usedbooks') as $key => $value) {
               
                    CartItem::create(
                        [
                            'cart_id' => $orders->id,
                            'user_book_id' => $key,
                            'quantity' => $value,
                  
                        ]
                    );
                    UserBook::whereId($key)->update(['is_sold'=>'1']);

                }}

                
        return redirect()->route('order.index')
            ->with('success', 'order has been created successfully.');
    }
}
