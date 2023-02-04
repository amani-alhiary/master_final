<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
      
        $order = DB::table('carts')
        ->latest()
        ->first();

        $orderbooks=DB::table('cart_items')
        ->select('*')
        ->join('books','books.id','=','cart_items.book_id')
        ->where('cart_id',$order->id)
        ->get();


        $orderusedbooks=DB::table('cart_items')
        ->select('*')
        ->join('user_books','user_books.id','=','cart_items.user_book_id')
        ->where('cart_id',$order->id)
        ->get();


        // dd($orderitems);

        // $request->session()->invalidate();

        return view('pages.bill', compact('order','orderbooks','orderusedbooks'));
    }
}
