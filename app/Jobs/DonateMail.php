<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class DonateMail implements ShouldQueue
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
       $to_name = $this->content['to_name'];
       $to_email = $this->content['to_email'];
       $amount = $this->content['amount'];
       $phone_number = $this->content['phone_number'];
       $plan = $this->content['plan'];
       $currency = $this->content['currency'];

       $data = array("to_email"=>$to_email,"to_name"=>$to_name,"phone_number"=>$phone_number,
       "amount"=>$amount,
       "currency"=>$currency,
       "plan"=>$plan,
       "body"=>"KIH donation received");
       if($to_email!='anonymous@gmail.com'){
        Mail::send('kih/email_templates/donate_template', $data, function ($message) use($to_email) {
            $message->from('noreply@destinytrust.org', 'Kids Innovation Hub');
            $message->sender('noreply@destinytrust.org', 'Kids Innovation Hub');
            $message->to($to_email);
            $message->subject('KIH donation received');
        });
       }
       Mail::send('kih/email_templates/admin_donate_template', $data, function ($message) {
           $message->from('noreply@destinytrust.org', 'Kids Innovation Hub');
           $message->sender('noreply@destinytrust.org', 'Kids Innovation Hub');
           $message->to('hello@destinytrust.org');
           $message->subject('KIH donation received');
       });

    }
}
