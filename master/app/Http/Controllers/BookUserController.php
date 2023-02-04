<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\UserBook;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookUserController extends Controller
{
    public function index()
    {
         $books = Book::orderBy('id','desc')->paginate(5);
         $categories = Category::orderBy('id','desc')->paginate(5);
          $authors = Book::select('author')->distinct()->get();

          $populerbooks= DB::table('cart_items')
          ->select('book_id',DB::raw('COUNT(quantity) as book_id'))
          ->groupBy('quantity')
          ->orderBy('book_id', 'desc')
          ->take(10);
          
        //   dd($populerbooks);
        return view('pages.shop', compact('books', 'categories','authors'));
    }


       /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\UserBook  $movie
    * @return \Illuminate\Http\Response
    */

    public function edit(Request $request)
    {
        $book=DB::table('user_books')
        ->select('*')
        // ->join('categories','categories.id','=','user_books.category_id')
        ->where('user_books.id','=',$request['id'])
        ->get();
         
        // dd($book);
        $category = Category::whereId($book[0]->category_id);

        
        $categories = Category::orderBy('id','desc')->paginate(5);

        // dd($book);

        return view('pages.profile.editbook',compact('book','categories','category'));
    }
     /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Book  $movie
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'id' => 'required',
            'book_name' => 'required',
            'author' => 'required',
            'quote' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'sale_price' => 'required',
            'video' => 'required',

    
          
        ]);
        // dd($id);
        $input = request()->except(['_token', '_method','submit' ]);
        // $input= $input1->except(['_method']);
        // request()->except(['_token']);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('usersimg/image'), $filename);
            $input['image']= $filename;
        }else{
            unset($input['image']);
        }

        if($request->file('image_01')){
            $file= $request->file('image_01');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('usersimg/image'), $filename);
            $input['image_01']= $filename;
        }else{
            unset($input['image_01']);
        }

        if($request->file('image_02')){
            $file= $request->file('image_02');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('usersimg/image'), $filename);
            $input['image_02']= $filename;
        }else{
            unset($input['image_02']);
        }

        if($request->file('image_03')){
            $file= $request->file('image_03');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('usersimg/image'), $filename);
            $input['image_03']= $filename;
        }else{
            unset($input['image_03']);
        }
        // dd($request->id);
        UserBook::whereId($id)->update($input);
      
        return redirect()->back()->withErrors(['msg', 'The Message']);

    }

    public function destroy(UserBook $book, $id)
    {
        // dd($id);
        UserBook::whereId($id)->delete();
        return redirect()->back()->withErrors(['msg', 'The Message']);
    }

}
