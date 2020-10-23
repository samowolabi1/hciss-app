<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class MessageController extends Controller
{
    
           public function store(Request $request){

    	$validated = $request->validate([

    		'user_id' => 'required',
    		'title' => 'required',
    		'message' => 'required'
    	]);

    	       
         Message::create([
         		
                'user_id' => $request['user_id'],
                'title' => $request['title'],
                'message' => $request['message']
            ]);
    
         return redirect()->route('home')->with('success','Message Sent Succesfully');
    }
}
