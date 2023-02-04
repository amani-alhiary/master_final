<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrdersAdminController extends Controller
{
    public function index()
    {
        
         $orders=DB::table('carts')
         ->select('*')
         ->join('users','users.id','=','carts.user_id')
        //  ->where('is_shipped','=','0')
         ->get();
        //  dd($orders);
        return view('admin.orders.index', compact('orders'));
    }

     
    public function show(Request $request)
    {
        $order = DB::table('carts')
        // ->join('users','users.id','=','carts.user_id')
        ->where('id',$request->id)
        ->get();

        $user=DB::table('users')
        ->where('id',$order[0]->id)
        ->get();

        // dd($user);
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

 
        return view('admin.orders.show', compact('orderbooks','orderusedbooks','order','user'));

        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'is_shipped' => 'required',
               
            ]);
            // dd($request->id);
            $input = request()->except(['_token', '_method','submit' ]);
    
            Cart::whereId($request->id)->update($input);
          
            return redirect()->route('ordersadmin.index')
                ->with('success', 'Order has been upadated successfully.');
        }
}
