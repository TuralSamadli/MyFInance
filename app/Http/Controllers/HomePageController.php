<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Blog;




class HomePageController extends Controller
{
    public function index(){

        $slider=Slider::where('is_deleted',0)->get();
        $about=About::where('is_deleted',0)->get();
        $portfolio=Portfolio::where('is_deleted',0)->get();
        $service=Service::where('is_deleted',0)->get();
        $blog=Blog::where('is_deleted',0)->get();
        return view('homepage',compact('slider','about','portfolio','service','blog'));
    }
}
