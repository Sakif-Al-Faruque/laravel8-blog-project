<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //get blog data
    public function getBlogs(){

        $blogs = Blog::paginate(12);
        $data = compact('blogs');

        return view('collection')->with($data);
    }
    
    
}
