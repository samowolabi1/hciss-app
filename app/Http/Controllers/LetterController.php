<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;

class LetterController extends Controller
{
    
    public function index(){

    	$letters = Letter::paginate(10);
    	return view('letters.index',compact('letters'));
    }
}
