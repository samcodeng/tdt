<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SupportMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $content;
    public function __construct(array $content)
    {
        //
        $this->content = $content;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        
       //send mail
       $fullname = $this->content['fullname'];
       $email = $this->content['email'];
       $description = $this->content['description'];
       $phone_number = $this->content['phone_number'];
    
       $data = array("email"=>$email,"phone_number"=>$phone_number,
       "description"=>$description,
       "fullname"=>$fullname,
       "body"=>"KIH support mail");
       Mail::send('kih/email_templates/support_template', $data, function ($message) {
           $message->from('webmaster@destinytrust.org', 'Kids Innovation Hub');
           $message->sender('webmaster@destinytrust.org', 'Kids Innovation Hub');
           $message->to('hello@destinytrust.org');
           $message->subject('KIH support mail');
       });

    }
}
