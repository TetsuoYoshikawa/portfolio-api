<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email"],
            "tel" => ['required', 'numeric', 'digits_between:10,11'],
            "text" => ["required", "string"],
        ]);
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $text = $request->text;

        Mail::to("bball.t3y18@gmail.com")->send(new ContactMail($name, $email, $tel, $text));

        return response()->json([
            "message" => "Mail Send"
        ], 200);
    }
}
