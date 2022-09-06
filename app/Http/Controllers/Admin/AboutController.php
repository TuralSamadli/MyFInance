<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    
    public function edit(){
        $about=About::where('is_deleted',0)->get();
        return view('admin.about' ,compact('about'));
    }
    public function update(Request $request)
    {
        $contact = About::where('id',$request->id)->update([
            'title'      => $request->title,
            'description'   => $request->description,
            'head'   => $request->head,
            'text'   => $request->text,
            'icon' => $request->icon,

        ]);
        
             return redirect()-> back()->with('success','Information was edited!!!');
        
}
}
