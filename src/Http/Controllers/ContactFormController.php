<?php
namespace Webriderz\Contactform\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webriderz\Contactform\Models\ContactForm;
use Mail;
/**
 * 
 */
class ContactFormController extends Controller
{
	
	function getContactPage()
	{
		return view('contactform::contact');
	}

	function sendEnquiry(Request $request)
	{
		$request->validate([
			'name'=>'required',
			'email'=>'required|email',
			'message'=>'required'
		]);
		$data=[
			'name'=>$request->name,
			'email'=>$request->email,
			'message'=>$request->message
		];
		ContactForm::create($data);
		Mail::send('contactform::email', ['data'=>$data], function ($message) use ($data) {
		    $message->from('testuc22@gmail.com', 'Webriderz');
		    $message->sender($data['email'], $data['name']);
		
		    $message->to('testuc22@gmail.com', 'Webriderz');
		
		    $message->subject('Contact Enquiry Test Package');
		});
		return redirect()->route('contact')->with('status','Enquiry Submitted Successfully');
	}
}