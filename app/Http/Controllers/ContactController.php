<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        return view('main.contact');
    }


    public function store(){

        /*$mailable= new ContactMessageCreated($request->name, $request->email, $request->message);
        Mail::to('angela_asere@yahoo.fr')->send($mailable);

        return 'envoye!';*/
        $data=request()->validate([

            'name'=>'required',
            'email'=>'required|email',
            'message' =>'required'

        ]);

        Mail::to('angela_asere@yahoo.fr')->send(new ContactMessageCreated($data));

        return 'Votre message a bien été envoyé';

    }
}
