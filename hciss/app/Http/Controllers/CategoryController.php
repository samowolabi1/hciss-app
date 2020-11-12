<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
        public function store(Request $request){

    	$validated = $request->validate([

    		'name' => 'required',
    	]);

    	       
         Category::create([
         		
                'name' => $request['name']
            ]);
    
         return redirect()->route('blog')->with('success','Category Added Succesfully');
    }

    public function destroy(Request $request, $id){

    	$cat = Category::find($id);
        $cat->delete();
       return redirect()->route('blog')->with('success','Category Succesfully Deleted');

    }
}
