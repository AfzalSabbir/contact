<?php

namespace AfzalSabbir\Contact\Http\Controllers;

use AfzalSabbir\Contact\Mail\ContactMailable;
use AfzalSabbir\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->description, $request->name));

        $contact = Contact::create(
            $request->all()
        );
        return redirect()->route('contact');
    }
}
