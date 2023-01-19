<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class RondaController extends Controller
{
    
    public function index(){

        return view('front.home');

    }

    public function rooms() {
    
        return view('front.rooms.rooms');
    
    }

    public function installations() {
     
        return view('front.installations.index');
     
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

}
