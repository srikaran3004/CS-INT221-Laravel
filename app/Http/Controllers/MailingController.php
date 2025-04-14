<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailingController extends Controller
{
    public function email(Request $request)
    {
        // If it's a POST request, send the email
        if ($request->isMethod('post')) {
            $to = 'srikaran2230@gmail.com';
            $subject = 'Welcome to our website';
            $body = 'Class Activity of Laravel';
            
            Mail::send('email.welcome', ['body' => $body], function($message) use ($to, $subject) {
                $message->to($to)->subject($subject);   
            });
            
            return "Email sent successfully";
        }
        
        // If it's a GET request, show the form
        return view('email.index');
    }
}
