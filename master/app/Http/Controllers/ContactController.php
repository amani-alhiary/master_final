<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $contacts = Contact::orderBy('id','desc')->paginate(15);
        // dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }
    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',

        
        ]);

        $input = $request->all();



        Contact::create($input);


        return redirect()->back()->with('success','your message has been sent successfully');


     
    }

    public function show(Request $request)
    {
        // dd($request);
        $contact=DB::table('contacts')
        ->select('*')
        ->where('id','=',$request->id)
        ->get();

        // dd($contact);
        $contacts = Contact::orderBy('id','desc')->paginate(15);

        // dd($contact);
        return view('admin.contacts.show', compact('contact','contacts'));
        // return redirect()->back()->with('contact',$contact);

      
        }
}
