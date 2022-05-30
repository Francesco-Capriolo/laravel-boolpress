<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function contactSend(Request $request){
        Mail::to("mailadmin@gmail.com")->send(new SendNewMail($request->guestName, $request->guestEmail, $request->guestMessage));

        return redirect()->route('home')->with('message', "Grazie $request->guestName!!Il messaggio è stato inviato correttamente");
    }

    public function thanks(){
    //return redirect('welcome')->with('message', 'il messaggio è stato inviato correttamente');
    }
}
