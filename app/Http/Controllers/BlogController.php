<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs')) ;
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required | string | max:255 | unique:blogs',
            'content' => 'required | string',
            'excerpt' => 'string',
            'image' => 'required| image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'status' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'IMG_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/blog_images'), $filename);
        }

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->hasFile('image') ? $filename : null,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'status' => $request->status
        ]);

        return back()->with('success', 'Blog Created Successfully');

       
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog.details', compact('blog'));
        
    }
}
