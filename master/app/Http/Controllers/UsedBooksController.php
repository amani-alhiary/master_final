<?php

namespace App\Http\Controllers;
use App\Models\UserBook;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class UsedBooksController extends Controller
{
    public function index()
    {

        $books = UserBook::orderBy('id','desc')->where('is_sold','0')->paginate(100);
        $categories = Category::orderBy('id','desc')->paginate(5);
        $authors = UserBook::select('author')->distinct()->get();

        return view('pages.userbooksshop', compact('books','categories','authors'));
    }

    public function show(Request $request)
    {
        $books = UserBook::findOrFail($request['id']);
        
        $book = $books->orderByDesc('id')->where('id',$request['id'])->paginate(5);
        $realtedbooks = $books->where('category_id',$book[0]->category_id)->paginate(6);

        $user=DB::table('user_books')
          ->select('*')
          ->join('users','users.id','=','user_books.user_id')
          ->where('users.id','=',$book[0]->user_id)
          ->get();
  
          if (Auth::check()){

            $favourites=DB::table('fav_used_books')
            ->select('*')
            ->where('user_id',Auth::user()->id)
            ->where('user_book_id',$book[0]->id)
            ->get();
            }

        return view('pages.userbookdetails', compact('book','realtedbooks','user','favourites'));

        }

}
