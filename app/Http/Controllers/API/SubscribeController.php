<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SubscribeMail;

class SubscribeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        //
        $rules=[
            'email'=>'required|email|unique:subscribes',
            ];
            
        $customMessage=[
            'unique'=>'you have already subscribed'
        ];
        $this->validate($request,$rules,$customMessage);
        $subscribe = Subscribe::create([
            'email'=>$request['email'],
        ]);
        $content = array(
            "email" => $request['email'],
            );
       SubscribeMail::dispatch($content)->delay(now()->addSeconds(1));
       return response(['status'=>'success'],200);

    }

}
