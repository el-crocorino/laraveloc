<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    
    public function getForm() {
        return view('contact');
    }
    
    public function postForm(ContactRequest $request) {
        
        Mail::send('emails.contact', $request->all(), function($message){
            $message->to('owenzek@gmail.com')->subject('Contact Laraveloc');
        });
        
        return view('confirm');
    }
    
}

