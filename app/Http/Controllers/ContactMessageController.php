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
        $this->validate($request,[
            'fname'=>'required',
            'email'=>'required|email',
            'lname'=>'required',
            'message'=>'required'
        ]);
        $data['title'] = $request->message;
        
               Mail::send('emails.contact-message', $data, function($message) use($request) {
        
               $message->to('nordmne.info@gmail.com', 'Receiver Name')
                   ->from( $request->email , $request->fname )
                           ->subject('Nord Website');
               });
        
              
        
               return redirect()->back()->with('contact', 'Uspesno ste poslali poruku! ');
           }
       }
       