<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
class MessagesController extends Controller
{
    public function user_messages(Request $request)
    {
        $send = Messages::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'   => $request->email,
            'message'   => $request->message
          
        ]);
        if ($send)
        {
            return redirect()->route('home')->with('success','Message successfully sent');
        }
     
    }}
