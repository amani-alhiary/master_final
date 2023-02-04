<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DeliveredOrdersAdminController extends Controller
{
    public function index()
    {
        
         $orders=DB::table('carts')
         ->select('*')
         ->join('users','users.id','=','carts.user_id')
         ->where('is_shipped','=','2')
         ->get();
        //  dd($orders);
        return view('admin.orders.delivered', compact('orders'));
    }

}
