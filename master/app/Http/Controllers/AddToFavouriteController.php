<?php

namespace App\Http\Controllers;
use App\Models\Favourite;
use App\Models\Book;
use App\Models\Comment;
use App\Models\FavUsedBook;


use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class AddToFavouriteController extends Controller
{
    public function index(Request $request)
    {
        $favourites=DB::table('favourites')
        ->select('*')
        ->join('books','books.id','=','favourites.book_id')
        ->where('user_id',$request->id)
        ->get();        


        $usedbooksfavourites=DB::table('fav_used_books')
        ->select('*')
        ->join('user_books','user_books.id','=','fav_used_books.user_book_id')
        ->where('fav_used_books.user_id',$request->id)
        ->get();  

        // dd($usedbooksfavourites);
        return view('pages.wishlist', compact('favourites','usedbooksfavourites'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
         
        
        ]);

        $input = $request->all();



        Favourite::create($input);


        $books = Book::findOrFail($request['book_id']);
        
        $book = $books->orderByDesc('id')->where('id',$request['book_id'])->paginate(5);
        $realtedbooks = $books->where('category_id',$book[0]->category_id)->paginate(6);
        $comments= Comment::where('book_id',$book[0]->id)->paginate(10);

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
        Favourite::where('book_id',$request->id)->delete();
        return redirect()->back()->withErrors(['msg', 'The Message']);
    }
    public function destroyusedbook(Request $request)
    {
        // dd($request);
        FavUsedBook::where('user_book_id',$request->id)->delete();
        return redirect()->back()->withErrors(['msg', 'The Message']);
    }
}
