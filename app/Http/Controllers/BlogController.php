<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;
use App\User;
use App\Blog;

class BlogController extends Controller
{
    
    public function index(){

    	$blogs = Blog::paginate(13);
         $i = 0;

    	return view('blogs.index',compact('blogs','i'));
    }

    public function show($id){

    	$blog = Blog::find($id);  


    	return view('blogs.show',compact('blog'));
    }

    public function store(Request $request){

    	$validated = $request->validate([

    		'title' => 'required',
    		'image' => 'required',
    		'content' => 'required',
    		'tags' => 'bail|required',
    	]);

    	//return $request->all();

    	 
          	// $file = $request->file('image');
           // $destinationPath = public_path('/blog_images/');       
           // $blogImage = date('YmdHis').".".$file->getClientOriginalExtension();
           // $file->move($destinationPath, $blogImage);
        
         Blog::create([
         		'user_id' => Auth::id(),
                'title' => $request['title'],
                'image' => $request['image'], //$blogImage,
                'content' => $request['content'],
                'tags' =>$request['tags']
            ]);
    
         return redirect()->route('blog')->with('success','Post Created Succesfully');
    }

    public function edit($id){

    	$blog = Blog::find($id);

    	return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request, $id){

    	$validated = $request->validate([

    		'title' => 'required',
    		'image' => 'required',
    		'content' => 'required',
    		'tags' => 'bail|required',
    	]);

    	 
           $file = $request->file('image');
           $destinationPath = public_path('/blog_images/');       
           $blogImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
           $file->move($destinationPath, $blogImage);
        
            $blog = new Blog;
            $user_id = Auth::id();
			$blog->title = $request['title'];
			$blog->image = $blogImage;
			$blog->content = $request['content'];
			$blog->tags = $request['tags'];
			$blog->save();
    
         return redirect()->route('blog')->with('success','Post Updated Succesfully');
    }
}
