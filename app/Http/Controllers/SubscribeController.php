<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    //
    
    public function index(Request $request)
    {
        //
        $this->validate($request,[
            'email'=>'required|email'
        ]);

       $email = $request->email;
    
       $data = array("email"=>$email,"body"=>"New subscriber");
       Mail::send('subscribe_template', $data, function ($message) {
           $message->from('webmail@destinytrust.org', 'The Destinytrust');
           $message->sender('webmail@destinytrust.org', 'The Destinytrust');
           $message->to('thedestinytrust@gmail.com');
           $message->subject('New Email Subscription');
       });
    } 
}
