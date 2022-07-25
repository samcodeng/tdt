<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class JoinMail implements ShouldQueue
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
       $first_name=$this->content['first_name'];
       $last_name=$this->content['last_name'];
       $email=$this->content['email'];
       $phone_number=$this->content['phone_number'];
       $age=$this->content['age'];
       $class=$this->content['class'];
       $city=$this->content['city'];
       $parents_number=$this->content['parents_number'];
       $parents_occupation=$this->content['parents_occupation'];
       $lga=$this->content['lga'];
       $experience=$this->content['experience'];
    
      $data = array(
        "first_name"=>$first_name,
      "last_name"=>$last_name,
      "email"=>$email,
      "phone_number"=>$phone_number,
      "age"=>$age,
      "class"=>$class,
      "city"=>$city,
      "parents_number"=>$parents_number,
      "parents_occupation"=>$parents_occupation,
      "lga"=>$lga,
      "experience"=>$experience,
       "body"=>"New Registration");
       Mail::send('kih/email_templates/join_template', $data, function ($message) {
           $message->from('webmaster@destinytrust.org', 'Kids Innovation Hub');
           $message->sender('webmaster@destinytrust.org', 'Kids Innovation Hub');
           $message->to('hello@destinytrust.org');
           //$message->to('samueelnd@gmail.com');
           $message->subject('New Registration');
       });

    }
}
