<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;

class LetterController extends Controller
{
    
    public function index(){

    	$letters = Letter::paginate(15);

    	//return $letters;
    	$i = 0;
    	return view('letters.index',compact('letters','i'));
    }
}
