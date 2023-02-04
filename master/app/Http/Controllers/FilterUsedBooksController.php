<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\UserBook;
class FilterUsedBooksController extends Controller
{
    public function index(Request $request )
    {
    // dd($request);
    $books=DB::table('user_books')
    ->select('*')
    ->where('category_id',$request->id)
    ->get();

    $categories = Category::orderBy('id','desc')->paginate(5);
    $authors = UserBook::select('author')->distinct()->get();

    // Return the search view with the resluts compacted
    return view('pages.searchresults', compact('books','categories','authors'));
    }

    
    public function store(Request $request )
    {
    // dd($request->minprice);
    $books=DB::table('user_books')
    ->select('*')
    ->where('price','>=',$request->minprice)
    ->where('price','<=',$request->maxprice)
    ->get();

    // dd($books);
    $categories = Category::orderBy('id','desc')->paginate(5);
    $authors = UserBook::select('author')->distinct()->get();

    // Return the search view with the resluts compacted
    return view('pages.searchresults', compact('books','categories','authors'));
    }
}
