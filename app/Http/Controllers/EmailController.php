<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;
#use App\Repositories\EmailRepository;       // Solution 2 
use App\Repositories\EmailRepositoryInterface;       // Solution 3

class EmailController extends Controller {
    
    public function getForm() {
        return view('email');
    }
   
    // Solution 0 
    
    /*public function postForm(EmailRequest $request) {
        
        $email = new Email;
        $email->email = $request->input('email');
        $email->save();
        
        return view('email_success');
        
    }*/
    
    // Solution 1 
    
    /*public function postForm(EmailRequest $request, Email $email) {
            
        $email->email = $request->input('email');
        $email->save();
        
        return view('email_success');
        
    }*/
    
    // Solution 2
    
    /*public function postForm(EmailRequest $request, EmailRepository $emailRepo) {
        $emailRepo->save($request->input('email'));        
        return view('email_success');        
    }*/
    
    // Solution 3
    
    public function postForm(EmailRequest $request, EmailRepositoryInterface $emailRepo) {
        $emailRepo->save($request->input('email'));        
        return view('email_success');        
    }
    
}

