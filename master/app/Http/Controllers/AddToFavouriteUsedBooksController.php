<?php

namespace App\Http\Controllers;
use App\Models\FavUsedBook;
use App\Models\UserBook;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AddToFavouriteUsedBooksController extends Controller
{
    public function index(Request $request)
    {
        $favourites=DB::table('fav_used_books')
        ->select('*')
        ->join('books','books.id','=','favourites.user_book_id')
        ->where('user_book_id',$request->id)
        ->get();        
        // dd($favourites);
        return view('pages.wishlist', compact('favourites'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request);
        $request->validate([
            'user_id' => 'required',
            'user_book_id' => 'required',
         
        
        ]);

        $input = $request->all();



        FavUsedBook::create($input);


        $books = UserBook::findOrFail($request['user_book_id']);
        
        $book = $books->orderByDesc('id')->where('id',$request['user_book_id'])->paginate(5);
        $realtedbooks = $books->where('category_id',$book[0]->category_id)->paginate(6);
        $comments= Comment::where('id',$book[0]->id)->paginate(10);

        // $comments=DB::table('comments')
        // ->select('*')
        // ->join('users','users.id','=','comments.user_id')
        // ->where('is_approved','1')
        // ->where('users.id','=',$comments[0]->user_id)
        // ->get();

        // dd($userinfo);
        return redirect()->back()->withErrors(['msg', 'The Message']);

     
    }

    public function destroy(Request $request)
    {
        // dd($request);
        FavUsedBook::where('user_book_id',$request->id)->delete();
        return redirect()->back()->withErrors(['msg', 'The Message']);
    }
}
