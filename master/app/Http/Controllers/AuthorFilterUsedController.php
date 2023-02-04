<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\UserBook;

use Illuminate\Http\Request;

class AuthorFilterUsedController extends Controller
{
    public function index(Request $request )
    {
        // dd($request);
    $books=DB::table('user_books')
    ->select('*')
    ->where('author','=',$request->author)
    ->get();

    $categories = Category::orderBy('id','desc')->paginate(5);
    $authors = UserBook::select('author')->distinct()->get();

    // Return the search view with the resluts compacted
    return view('pages.searchresults', compact('books','categories','authors'));
    }
}
