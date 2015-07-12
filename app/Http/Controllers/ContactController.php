<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

	public function create()
    {
        //return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
		\Mail::send('emails.contact',
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'user_message' => $request->get('message')
			), function($message){
				$message->from('info@jarys.be');
				$message->to('kevin.vanpoppel@telenet.be', 'Admin')->subject('Jary\'s Digital Printing - Vraag ontvangen');
		});
		# Nog een bevestingsmail naar de gebruiker sturen.

    	return \Redirect::route('contact')->with('message', 'Bedankt om ons te contacteren! Wij zullen uw vraag zo snel mogelijk beantwoorden.');
    }

}
