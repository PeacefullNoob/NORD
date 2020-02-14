<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;


class ContactMessageController extends Controller
{
    public function create(){
        return view('app.contact');
    }
    
    public function store(Request $request){
        Mail::send('emails.contact-message',[
            'msg' => $request->message
        ], function ($mail) use($request){
        $mail->from($request->email);
        $mail->to('petar.gajevic69@gmail.com');
        });
        return redirect()->back()->with('flash_message', 'Thank you for your message. ');
    }
}
