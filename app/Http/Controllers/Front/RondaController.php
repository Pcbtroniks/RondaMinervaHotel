<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class RondaController extends Controller
{
    
    public function index(){

        return view('front.home');

    }

    public function rooms() {
    
        return view('front.rooms.rooms');
    
    }

    public function installations() {
     
        return view('front.installations.installations');
     
    }

    public function visit() {
     
        return view('front.visit.visit');
     
    }

    public function services() {
     
        return view('front.services.index');
     
    }

    public function contact() {
     
        return view('front.contact.index');
     
    }

    public function contactStore() {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required',
        ]);
     
        Mail::to('reservaciones@rondaminervahotel.com')->send(new ContactMail($data));

        return redirect()->route('contact')->with('success', 'Mensaje enviado correctamente');
     
    }

}
