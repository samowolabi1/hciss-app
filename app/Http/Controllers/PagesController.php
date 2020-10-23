<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;


class PagesController extends Controller
{
    public function index(){


    	return view('welcome');
    }

    public function support(){

    	return view('pages.support');
    }

    public function service(){

    	return view('pages.service');
    }

    public function history(){

    	return view('pages.history');
    }


      public function demo(){

        $regions = Region::all();

        return view('pages.demo',compact('regions'));
    }

    public function setting(){


        return view('settings.index');
    }
}
