<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
         $books = Book::orderBy('id','desc')->paginate(20);
         $categories = Category::orderBy('id','desc')->paginate(5);

        return view('admin.books.create', compact('books', 'categories'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required',
            'author' => 'required',
            'quote' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'sale_price' => 'required',
            'video' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'image_01' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'image_02' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'image_03' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',


        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'usersimg/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        if ($image = $request->file('image_02')) {
            $destinationPath = 'usersimg/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image_02'] = "$profileImage";
        }
        if ($image = $request->file('image_01')) {
            $destinationPath = 'usersimg/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image_01'] = "$profileImage";
        }
        if ($image = $request->file('image_03')) {
            $destinationPath = 'usersimg/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image_03'] = "$profileImage";
        }

        print_r($input);

        Book::create($input);

        return redirect()->route('booksadmin.index')
            ->with('success', 'Book created successfully.');
    }

}
