<?php

namespace App\Http\Controllers;
use App\Models\UserBook;

use Illuminate\Http\Request;

class SoldUsedBooksAdminController extends Controller
{
    public function index()
    {

        $soldbooks = UserBook::orderBy('id','desc')->where('is_sold','1')->paginate(100);
        return view('admin.usedbooks.soldbooks', compact('soldbooks'));
    }
}
