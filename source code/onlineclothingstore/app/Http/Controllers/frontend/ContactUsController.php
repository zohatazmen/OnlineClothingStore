<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact-us');
    }

    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'message' => 'required',
            ]
        );

        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }
}