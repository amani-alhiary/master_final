<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
         $users = User::orderBy('id','desc')->paginate(5)->where('is_admin', '0');

        return view('admin.users.index', compact('users'));
    }
    
     /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $movie
    * @return \Illuminate\Http\Response
    */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }



     /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\User  $movie
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'image' => 'required',
            

        ]);
        $input = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('usersimg/image'), $filename);
            $input['image']= $filename;
        }else{
            unset($input['image']);
        }
        $user->fill($input)->save();
  
        return redirect()->route('users.index')->with('success','user Has Been updated successfully');
    }

      /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','user has been deleted successfully');
    }
}
