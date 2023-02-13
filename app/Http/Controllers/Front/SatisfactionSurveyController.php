<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatisfactionSurveyController extends Controller
{
    public function index()
    {
        return view('front.survey.satisfaction-survey');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        return dd($request->all());
    }
}
