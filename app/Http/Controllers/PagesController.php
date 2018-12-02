<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Post;
use Mail;


class PagesController extends Controller
{
	public function getIndex()
	{
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout()
	{
		$first='Alex';
		$last='Curtis';
		$full=$first." ".$last;
		$email='alex@jacurtis.com';

		$data=array(
			"fullname"=>$full,
			"email"=>$email);

		return view('pages.about')->withData($data);
	}

	public function getContact()
	{
		return view('pages.contact');
	}

	public function postContact(Request $request)
	{
		$this->validate($request,['email'=>'required|email',
								'subject'=>'min:3',
								'message'=>'min:10']);
		
		$data=array('email' => $request->email,
					'subject' => $request->subject,
					'bodyMessage' => $request->message
				);

		Mail::send('emails.contact',$data, function($message) use ($data){
			$message->from('email');
			$message->to('rifpin@gmail.com');
			$message->subject('subject');
		});
	}
}