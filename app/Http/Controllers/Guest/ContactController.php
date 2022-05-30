<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('guest.test');
    }

        public function contactSend(){
        return redirect('welcome')->with('message', 'il messaggio è stato inviato correttamente');
    }
}
