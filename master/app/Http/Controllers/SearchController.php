<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $books = Book::query()
            ->where('book_name', 'LIKE', "%{$search}%")
            ->orWhere('author', 'LIKE', "%{$search}%")
            ->orWhere('category_id', 'LIKE', "%{$search}%")
            ->get();
    
            $categories = Category::orderBy('id','desc')->paginate(5);
            $authors = Book::select('author')->distinct()->get();

        // Return the search view with the resluts compacted
        return view('pages.searchresults', compact('books','categories','authors'));
    }
}
