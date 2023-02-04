<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AddCommentController extends Controller
{


    public function index()
    {
        $comments=DB::table('comments')
        ->select('users.name','comments.title','comments.comment','comments.created_at','comments.id','comments.is_approved')
        ->join('users','users.id','=','comments.user_id')
        ->get();        
        return view('admin.comments.index', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'title' => 'required',
            'comment' => 'required',
        
        ]);

        $input = $request->all();



        Comment::create($input);


        $books = Book::findOrFail($request['book_id']);
        
        $book = $books->orderByDesc('id')->where('id',$request['book_id'])->paginate(5);
        $realtedbooks = $books->where('category_id',$book[0]->category_id)->paginate(6);
        $comments= Comment::where('book_id',$book[0]->id)->paginate(10);

        $comments=DB::table('comments')
        ->select('*')
        ->join('users','users.id','=','comments.user_id')
        ->where('is_approved','1')
        ->where('users.id','=',$comments[0]->user_id)
        ->get();

        // dd($userinfo);
        return redirect()->back()->with('success','your comment has been added to review');

     
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'is_approved' => 'required',
           
        ]);
        // dd($request->id);
        $input = request()->except(['_token', '_method','submit' ]);

        Comment::whereId($request->id)->update($input);
      
        return redirect()->route('addcomment.index')
            ->with('success', 'Comment has been updated successfully.');
    }

}
