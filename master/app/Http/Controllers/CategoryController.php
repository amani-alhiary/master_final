<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
         $categories = Category::orderBy('id','desc')->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
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
            'category_name' => 'required',

        ]);

        $input = $request->all();

     
        Category::create($input);

        return redirect()->route('categories.index')
            ->with('success', 'category created successfully.');
    }



      /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Category  $movie
    * @return \Illuminate\Http\Response
    */

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }


      /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Category  $movie
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
    
          
        ]);
        $input = $request->all();
        $category->fill($input)->save();
  
        return redirect()->route('categories.index')->with('success','category Has Been updated successfully');
    }

      /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Category  $user
    * @return \Illuminate\Http\Response
    */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','category has been deleted successfully');
    }
    
}
