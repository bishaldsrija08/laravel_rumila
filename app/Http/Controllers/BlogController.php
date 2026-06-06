<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        // Validate the request data
        $data = $request->validate([
            "title" => "required",
            "subtitle" => "required",
            "description" => "required",
        ]);

        // Create a new blog post using the validated data
        Blog::create($data);

        // Redirect to the blog index page with a success message
        return redirect()->route("blog.index");
    }

    // Get all blogs
    
    // Get a single blog

    // Update a blog

    // Delete a blog
}