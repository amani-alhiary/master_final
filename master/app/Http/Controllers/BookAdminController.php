<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class BookAdminController extends Controller
{
    public function index()
    {
         $books = Book::orderBy('id','desc')->paginate(100);
         $categories = Category::orderBy('id','desc')->paginate(100);

        return view('admin.books.index', compact('books', 'categories'));
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Book  $movie
    * @return \Illuminate\Http\Response
    */
    public function show(Request $request)
    {
        $book = Book::find($request->id)->where('id',$request->id)->paginate(5);
 
        return view('admin.books.details', compact('book'));

        }



        
      /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Book  $book
    * @return \Illuminate\Http\Response
    */

    public function edit(Request $request)
    {
        // $book = Book::find($book->id)->where('id',$book->id)->paginate(5);
        $book = Book::find($request->id)->where('id',$request->id)->paginate(5);

        // dd($book);
        $categories = Category::orderBy('id','desc')->paginate(5);
        return view('admin.books.edit',compact('book','categories'));

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
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            // 'image_01' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            // 'image_02' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            // 'image_03' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',

    
          
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
        // $book->fill($input)->where('id','=',$request->id);
        Book::whereId($id)->update($input);
      
        return redirect()->route('booksadmin.index')
            ->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book, $id)
    {
        // dd($id);
        Book::whereId($id)->delete();
        return redirect()->route('booksadmin.index')->with('success','book has been deleted successfully');
    }

}
