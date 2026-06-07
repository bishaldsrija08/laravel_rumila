<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blog posts from the database
        $blogs = Blog::all();
        return view('blog.index', [
            "blogs" => $blogs
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
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
    // Get a single blog

    public function show(Blog $blog)
    {
        // Pass the bound blog model directly to the view
        return view('blog.show', [
            "blog" => $blog
        ]);
    }

    // Edit a blog page
    public function edit(Blog $blog)
    {
        // Find the blog post by ID and pass it to the view
        $blog = Blog::findOrFail($blog->id);
        return view('blog.edit', [
            "blog" => $blog
        ]);
    }
    // Update a blog
    public function update(Request $request, Blog $blog)
    {
        // Validate the request data
        $data = $request->validate([
            "title" => "required",
            "subtitle" => "required",
            "description" => "required",
        ]);

        // Find the blog post by ID and update it with the validated data
        $blog->update($data);
        // Redirect to the blog index page with a success message
        return redirect()->route("blog.index");
    }

    // Delete a blog
    public function destroy(Blog $blog)
    {
        // Find the blog post by ID and delete it
        $blog->delete();

        // Redirect to the blog index page with a success message
        return redirect()->route("blog.index");
    }
}