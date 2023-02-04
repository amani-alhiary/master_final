<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookDetailsController extends Controller
{

    public function show(Request $request)
    {
        $books = Book::findOrFail($request['id']);
        
        $book = $books->orderByDesc('id')->where('id',$request['id'])->paginate(5);
        $realtedbooks = $books->where('category_id',$book[0]->category_id)->paginate(6);
        $comments= Comment::where('book_id',$book[0]->id)->paginate(10);


    
        $comments=DB::table('comments')
        ->select('*')
        ->join('users','users.id','=','comments.user_id')
        ->where('is_approved','1')
        ->where('comments.book_id','=',$request['id'])
        ->get();

        // print_r($comments);
        if (Auth::check()){

        $favourites=DB::table('favourites')
        ->select('*')
        ->where('user_id',Auth::user()->id)
        ->where('book_id',$book[0]->id)
        ->get();
        }

        return view('pages.bookdetails', compact('book','realtedbooks','comments','favourites'));
      
        }
}
