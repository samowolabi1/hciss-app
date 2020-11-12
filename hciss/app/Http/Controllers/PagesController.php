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

        $regions = Region::all();

    	return view('pages.support',compact('regions'));
    }

    public function career(){

        return view('pages.career');
    }

    public function team(){

        return view('pages.team');
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




     public function bse(){


        return view('pages.bse');
    }

     public function auditing(){


        return view('pages.auditing');
    }

     public function research(){


        return view('pages.research');
    }

    public function academy(){


        return view('pages.academy');
    }


}
