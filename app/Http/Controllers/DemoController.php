<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use App\Region;
use Auth;

class DemoController extends Controller
{
    //

     public function index(){

    	$demos = Demo::paginate(10);
    	$i = 0;

    	return view('demo.index',compact('demos','i'));
    }

    public function store(Request $request){

    	$validated = $request->validate([

    	'region_id' => 'required',
        'company_name' => 'required',
    	'contact_person' => 'required',
    	'email' => 'required',
    	'phone' => 'required',
    	'industry' => 'required',
    	'service_sector' => 'required'
    	]);

         Demo::create([
         		'user_id' => Auth::id(),
                'region_id' => $request['region_id'],
                'company_name' => $request['company_name'],
                'contact_person' => $request['contact_person'],
                'email' =>$request['email'],
                'phone' =>$request['phone'],
                'industry' =>$request['industry'],
                'service_sector' =>$request['service_sector']
            ]);
    
         return redirect()->route('demo')->with('success','Demo Request Sent');
    }
}
