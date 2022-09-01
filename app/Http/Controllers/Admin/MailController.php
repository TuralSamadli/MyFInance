<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;

class MailController extends Controller
{
    public function index(){
        $messages=Messages::where('id',1)->get();
                return view('admin.message',compact('messages'));
            }
}
