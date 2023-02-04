<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_users= $total = DB::table('users')->count('id');
        $total_recently_registered_users= $total = DB::table('users')->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count('id');

        $total_user_books = DB::table('user_books')->count('id');
        $total_books = DB::table('books')->count('id');
        $total_orders = DB::table('carts')->count('id');
        $total_orders_items = DB::table('cart_items')->count('id');
        $sold_books = DB::table('cart_items')->sum('quantity');
        $total_profit = DB::table('carts')->sum('total_price');

        $total_sold_user_books= DB::table('user_books')->where('is_sold','1')->count('id');
        $total_sold_books = DB::table('cart_items')->sum('quantity');

        $total_sold_books_last_week = DB::table('cart_items')->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->sum('quantity');

        
        $total_sold_new_books=$sold_books-$total_sold_user_books;
        $sold_books_avg=($total_sold_new_books/($total_books*10))*100;

        $total_comments = DB::table('comments')->count('id');
        $total_comments_last_week = DB::table('comments')->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count('id');


        $total_fav= $total = DB::table('favourites')->count('id');
        $total_used_fav= $total = DB::table('fav_used_books')->count('id');
        $total_add_to_fav= $total_fav+$total_used_fav;

        $total_waiting_orders= $total = DB::table('carts')->where('is_shipped','0')->count('id');
        $total_shpped_orders= $total = DB::table('carts')->where('is_shipped','1')->count('id');
        $total_delivered_orders= $total = DB::table('carts')->where('is_shipped','2')->count('id');

        
        $sold_used_books_avg= ($total_sold_user_books/$total_user_books)*100;
        $waiting_orders_avg= ($total_waiting_orders/$total_orders)*100;
        $shipped_orders_avg= (($total_shpped_orders+$total_delivered_orders)/$total_orders)*100;




        // dd($total_books);

        return view('admin.admin',compact('total_users','total_recently_registered_users','sold_books_avg','total_books','total_sold_books','total_user_books','total_profit','total_sold_books_last_week','total_comments','total_comments_last_week','sold_used_books_avg','waiting_orders_avg','shipped_orders_avg'));
    }
}
