<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SubscribeMail implements ShouldQueue
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
            $email = $this->content['email'];

            $title = "Kids Innovation Hub Subscription";
            $notification = "Thank you for subscribing to Kids Innovation Hub. Looking ahead to a great 
            journey with you, cheers!";
            $data = array("title"=>$title,"notification"=>$notification,"body"=>"Kids Innovation Hub Subscription");
            Mail::send('email_templates/notification', $data, function ($message) use ($title,$notification,$email) {
                $message->from('support@destinytrust.org/kih', 'Kids Innovation Hub');
                $message->sender('support@destinytrust.org/kih', 'Kids Innovation Hub');
                $message->to($email);
                $message->subject('New Subscriber');
            });

            $title="New Subscriber";
            $notification="$email just subscribed to Kids Innovation Hub. Details available in your dashboard.";
            $data = array("title"=>$title,"notification"=>$notification,"body"=>"Kids Innovation Hub Subscription");
            Mail::send('email_templates/notification', $data, function ($message) use ($title,$notification) {
                $message->from('support@destinytrust.org/kih', 'Kids Innovation Hub');
                $message->sender('support@destinytrust.org/kih', 'Kids Innovation Hub');
                $message->to('info@destinytrust.org/kih');
                $message->subject('New Subscriber');
            });
    }
}
