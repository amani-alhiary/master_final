<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Book;


use Illuminate\Http\Request;

class AuthorFilterController extends Controller
{
    public function index(Request $request )
    {
        // dd($request);
    $books=DB::table('books')
    ->select('*')
    ->where('author','=',$request->author)
    ->get();

    $categories = Category::orderBy('id','desc')->paginate(5);
    $authors = Book::select('author')->distinct()->get();

    // Return the search view with the resluts compacted
    return view('pages.searchresults', compact('books','categories','authors'));
    }

   
}
