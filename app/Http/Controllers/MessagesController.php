<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Requests\MessagesRequest;

class MessagesController extends Controller
{
    public function user_messages(MessagesRequest $request)
    {
        $send = Messages::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'   => $request->email,
            'message'   => $request->message,
          
        ]);
        if ($send)
        {
            return redirect()->route('home')->with('success','Message successfully sent');
        }
     
    }
    public function delete(Request $request){
        $send=Messages::where('id',$request->id)->update([
            'is_deleted' =>1
        ]);
}
}