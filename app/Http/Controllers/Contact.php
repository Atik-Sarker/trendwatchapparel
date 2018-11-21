<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function ContactUs(Request $request){

        
        $request->validate([
            'name' => 'string',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'message' => 'required|min:10',
            'company' => 'string',
            'street' => 'string',
            'url' => 'string',
        ]);
        $data = array(
            'name'=>  $request->name,
            'email'=> $request->email,
            'company'=>$request->company,
            'url'=>$request->url,
            'street'=>$request->street,
            'country'=>$request->country,
            'phone'=> $request->phone,
            'user_message'=>$request->message,
        );


        Mail::send('mail/mail', $data, function($message) use ($data) {
            $message->to('admin@admin.com')->subject('User Info');
            $message->from($data['email']);
         });
         return redirect()->back()->with('status', 'Message Send Successfully');
        
    }
}
