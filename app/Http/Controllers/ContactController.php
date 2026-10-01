<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::raw(
            $validated['message'],
            function ($mail) use ($validated) {

                $mail->to('tlahbib10@gmail.com')
                     ->subject('Nouveau message depuis LahbibCoding')
                     ->replyTo(
                         $validated['email'],
                         $validated['name']
                     );
            }
        );

        return back()->with(
            'success',
            'Votre message a bien été envoyé.'
        );
    }
}