<?php

namespace App\Http\Controllers;

use App\Mail\ContactMeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function contact(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
            'Yname' => 'required',
        ],
            [
                'email.required' => 'Email is required!',
                'email.email' => 'Email format invalid!',
                'message.required' => 'Message is required!',
                'Yname.required' => 'Name is required!',
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

           Mail::to('hpbandara94@gmail.com')->send(new ContactMeMail($request));

        return redirect()->back()->with('success',"Your mail has been sent successfully!");
    }
}
