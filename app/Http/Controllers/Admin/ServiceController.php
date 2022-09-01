<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){
        $services=Service::where('id',1)->get();
                return view('admin.service.index',compact('services'));
            }
    public function edit(){
        return view('admin.service.edit');
    }
    public function update(Request $request)
    {
        $contact = Service::where('id',1)->update([
            'title'      => $request->title,
            'description'   => $request->description,
            'service_name'   => $request->service_name,
            

        ]);
        
             return redirect()-> back()->with('success','Information was edited!!!');
        
}
}
