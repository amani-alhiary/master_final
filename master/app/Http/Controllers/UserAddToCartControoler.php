<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\UserBook;

use Illuminate\Http\Request;

class UserAddToCartControoler extends Controller
{
    public function storeStepOne(Request $request)
    {
        // Session::flush();

        $validated = $request->validate([
            
            'book_id' => ['required'],
            'quantity' => ['required'], 
        ]);
        $quantity = array();
        $used_ids = array();
        if (session()->has('cart.usedbooks')) {
            session()->put("cart.usedbooks.$request->book_id", $request->quantity);

         
        }else {
            $cart = [
                'usedbooks' => [
                    $request->book_id => $request->quantity
                ]
            ];
            session()->put('cart', $cart);
            }

        foreach (session()->get('cart.usedbooks') as $key => $value) {
            array_push($used_ids,$key);
            array_push($quantity,$value);

        }
        $usedbooks = DB::table('user_books')
            ->whereIn('id', $used_ids)
            ->get();
        $cart= session('cart.usedbooks');

        // dd(session('cart'));
        return redirect()->route('cart.index')
        ->with('success', 'Item had been added successfully.');
    }


}
