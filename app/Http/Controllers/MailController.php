<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $name = $request->input('name');
        $surname = $request->input('suename');
        $subject = $request->input('subject');
        $argument = $request->input('argument');
        $mail = $request->input('mail');

        Mail::to('admin@ecommerce.it')->send(new AdminMail($name,$surname,$subject,$argument,$mail));

        Mail::to($mail)->send(new ContactMail());

        return redirect(route('homepage'))->with('emailSent','Mail inviata correttamente');
    }
}
