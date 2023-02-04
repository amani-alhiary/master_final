<?php

namespace App\Http\Controllers;
use App\Models\UserBook;
use Illuminate\Http\Request;

class UsedBooksAdminController extends Controller
{
  
    public function index()
    {

        $books = UserBook::orderBy('id','desc')->paginate(100);
        return view('admin.usedbooks.index', compact('books'));
    }

    public function show(Request $request)
    {
        $book = UserBook::find($request->id)->where('id',$request->id)->paginate(5);
 
        return view('admin.usedbooks.details', compact('book'));

        }
}
