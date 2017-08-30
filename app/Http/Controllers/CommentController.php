<?php

namespace App\Http\Controllers;
/* To return to a view. */
use Illuminate\Http\Request;
/* To use the database. */
use DB;
use App\Quotation;
/* To send email. */
use Illuminate\Support\Facades\Mail;


class CommentController extends Controller {


    public function submit(Request $request) {

        /**
         * Validate post.
         **/
        $this->validate($request, [
            'title' => 'required|min:3',
            'firstName' => 'required|min:2|max:100',
            'lastName' => 'required|min:2|max:100',
            'email' => 'required|e-mail|min:5|max:255',
            'phone' => 'nullable|min:8|max:22',
            'subject' => 'required|min:5|max:191',
            'comment' => 'required|min:20',
        ]);

    	/**
         * Post form data to database.
         **/
        try {
            $this->postComment(
            	$request->title,
            	$request->firstName,
            	$request->lastName,
            	$request->email,
            	$request->phone,
            	$request->subject,
            	$request->comment
            );
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        /**
         * Send email. 
         **/
        Mail::send(
            'mail_templates.newcomment', [
                'title' => $request->title,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'comment' => $request->comment,
            ],
            function ($message) {
                $message->from(
                    'comment@www.kennethpilgrim.eu',
                    'KP Site'
                );
                $message->to('kenneth@kennethpilgrim.eu');
                $message->subject($request->subject);
            }
        );

        /**
         * Load contact page.
         **/
        $data = array(
    		'page' => 'contact',
            'messages' => array(
                'Thank you for your message.',
                'I will get back at you as soon as possible!',
            ),
    	);
        return view('pages.contact')->with($data);
    }


    protected function postComment($title, $firstname, $lastname, $email, $phone, $subject, $comment){
    	DB::insert('
    		insert into comments (title, first_name, last_name, email, phone, subject, comment)
    		values (?, ?, ?, ?, ?, ?, ?
    	)', array($title, $firstname, $lastname, $email, $phone, $subject, $comment));

        /* Load contact page. */
        $data = array(
            'page' => 'contact'
        );
        return view('pages.contact')->with($data);
    }


}