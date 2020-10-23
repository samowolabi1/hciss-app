<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;


class PrivacyController extends Controller
{
    
       
	public function index(){


		return view('policy.index');
	}



       public function store(Request $request){

    	$validated = $request->validate([

    		'message' => 'required'
    	]);

    	       
         Privacy::create([

                'message' => $request['message']
            ]);
    
         return redirect()->back()->with('success','Message Sent Succesfully');
    }
}
