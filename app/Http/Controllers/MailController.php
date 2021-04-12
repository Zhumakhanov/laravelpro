<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $data = array('name'=>"Alikhan", "body" => "Test mail");
        Mail::send('demo', $data, function($message){
            $message->to('zhumakhanov2110@gmail.com', 'Ali Ali')
                    ->subject('My test email');
                $message->from('zhumakhanov21@gmail.com', 'Alisher Mukanov');
        });
        echo "Email Sent!";
    }
}
