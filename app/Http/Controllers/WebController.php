<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    //
    
    /// S U P P O R T      F O R M
    
    public function support(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'fullname'=>'required',
            'subject'=>'required',
        ]);
        
       //send mail
       $email = $request->email;
       $mail_message = $request->message;
       $fullname = $request->fullname;
       $phone_number = $request->phone_number;
       $subject = $request->subject;
    
       $data = array("email"=>$email,"subject"=>$subject,"fullname"=>$fullname,"phone_number"=>$phone_number,
       "mail_message"=>$mail_message,
       "body"=>"New support mail");
       Mail::send('support_template', $data, function ($message) {
           $message->from('webmail@destinytrust.org', 'The Destinytrust');
           $message->sender('webmail@destinytrust.org', 'The Destinytrust');
           $message->to('thedestinytrust@gmail.com');
           $message->subject('New Support Mail');
       });
        return view('contact',[
            'success'=>'Message sent successfully!. Expect a feedback from us soon.'
        ]);

    } public function sponsor(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'fullname'=>'required',
            'phone_number'=>'required',
        ]);
        
       //send mail
       $email = $request->email;
       $fullname = $request->fullname;
       $phone_number = $request->phone_number;
       $number_of_children = $request->number_of_children;
       $gender = $request->gender;
    
       $data = array("email"=>$email,"fullname"=>$fullname,"phone_number"=>$phone_number,"gender"=>$gender,
       "number_of_children"=>$number_of_children,
       "body"=>"New sponsor");
       Mail::send('sponsor_template', $data, function ($message) {
           $message->from('webmail@destinytrust.org', 'The Destinytrust');
           $message->sender('webmail@destinytrust.org', 'The Destinytrust');
           $message->to('thedestinytrust@gmail.com');
           $message->subject('New Sponsor');
       });
        return view('sponsor-a-child',[
            'success'=>'Thank you for choosing to sponsor a child!. Expect a feedback from us soon.'
        ]);
    }
    
    public function index()
    {
        //
    
        $posts = DB::select("select * from wp_posts WHERE post_type='post' AND post_status='publish' ORDER BY post_date DESC LIMIT 2");
        foreach($posts as $post){
            $post_id = $post->ID;
            $thumbnail_id = DB::select("select meta_value from wp_postmeta where post_id='$post_id' AND meta_key='_thumbnail_id'");
            if(!empty($thumbnail_id)){
                $thumbnail_id =  $thumbnail_id[0]->meta_value;
                $thumbnail = DB::select("select guid from wp_posts where ID='$thumbnail_id'");
                $post->thumbnail = $thumbnail[0]->guid;
            }else{
                $post->thumbnail = '/img/no-image.png';
            }

            $terms_id = DB::select("select * from wp_term_relationships where object_id='$post_id'");
            if(!empty($terms_id)){  
                foreach($terms_id as $term_id) {
                    $term_as_cat_id = $term_id->term_taxonomy_id;
                    $terms_as_cat = DB::select("select * from wp_term_taxonomy where term_id='$term_as_cat_id' AND taxonomy='category'");
                    if(!empty($terms_as_cat)){
                        $term_id = $terms_as_cat[0]->term_id;     
                        $terms = DB::select("select * from wp_terms WHERE term_id='$term_id'");
                    }
                }
                $terms_name = $terms[0]->name;
                $terms_slug = $terms[0]->slug;
               // print_r($terms_id);
            }else{
                $terms_name = 'Uncategorized';
                $terms_slug = 'uncategorized';
            }
            
                    //get author
                    $author_id = $post->post_author;
                    $author = DB::select("select * from wp_users where ID='$author_id'");
                    if(!empty($author)){
                        $post->author = $author[0]->display_name;
                        $post->author_url = $author[0]->user_nicename;

                    }else{
                        $post->author = 'The Destinytrust';
                    }
            $post->url = '/blog/'.$post->post_name;
            $post->category = $terms_name;
            $post->cat_link = $terms_slug;

        } 
         return view('home',[
            'posts'=>$posts,
            ]);
    }    
}
