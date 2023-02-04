<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrderProfileController extends Controller
{
    public function index(Request $request )
    {
    //   dd($request->id);
        $orders = DB::table('carts')
        ->where('user_id',$request->id)
        ->get();

        // dd($order);
        // $orderbooks=DB::table('cart_items')
        // ->select('*')
        // ->join('books','books.id','=','cart_items.book_id')
        // ->where('cart_id',$order->id)
        // ->get();


        // $orderusedbooks=DB::table('cart_items')
        // ->select('*')
        // ->join('user_books','user_books.id','=','cart_items.user_book_id')
        // ->where('cart_id',$order->id)
        // ->get();


        // dd($orderitems);

        return view('pages.profile.orders', compact('orders'));
    }


   
    public function show(Request $request)
    {
        $order = DB::table('carts')
        ->where('id',$request->id)
        ->get();
        // dd($order);
        $orderbooks=DB::table('cart_items')
        ->select('*')
        ->join('books','books.id','=','cart_items.book_id')
        ->where('cart_id',$request->id)
        ->get();


        
        $orderusedbooks=DB::table('cart_items')
        ->select('*')
        ->join('user_books','user_books.id','=','cart_items.user_book_id')
        ->where('cart_id',$request->id)
        ->get();


        // dd($orderusedbooks);

 
        return view('pages.profile.orderdetails', compact('orderbooks','orderusedbooks','order'));

        }

}
