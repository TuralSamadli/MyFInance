<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index(){
        $blogs=Blog::where('id',1)->get();
                return view('admin.blog.index',compact('blogs'));
            }
    public function edit(){
        return view('admin.blog.edit');
    }
    public function update(Request $request)
    {
        $contact = Blog::where('id',1)->update([
            'blog_title'      => $request->blog_title,
            'blog_description'   => $request->blog_description,
            'blog_poster'   => $request->blog_poster,
            'date'   => $request->date,
            

        ]);
        
             return redirect()-> back()->with('success','Information was edited!!!');
        
}
}
