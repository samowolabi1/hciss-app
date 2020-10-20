<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    
     public function index(){

    	$contacts = Contact::paginate(10);
    	$i = 0;

    	return view('contact.index',compact('contacts','i'));
    }

    public function store(Request $request){

    	$validated = $request->validate([

    	'name' => 'required',
        'email' => 'required',
    	'phone' => 'required',
    	'subject' => 'required',
    	'message' => 'required'
    	]);

         Contact::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'subject' =>$request['subject'],
                'message' =>$request['message']
            ]);
    
         return redirect()->route('contacts')->with('success','Message Sent Succesfully');
    }
}
