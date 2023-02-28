<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SatisfactionSurvey;
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
            'satisfaction' => 'required',
        ]);

        $satisfactionSurvey = SatisfactionSurvey::create([
            'value' => $request->satisfaction,
            'zone' => $request->zone ?? null,
        ]);

        return response()->json([
            'message' => 'Gracias por tu opinión.',
            'saved' => $satisfactionSurvey,
            'data' => $request->all(),
        ]);
    }

    public function socials()
    {
        return view('front.socials.socials');
    }

    public function results()
    {
        $badCount = SatisfactionSurvey::where('value', 'malo')->count() ?? 0;
        $regularCount = SatisfactionSurvey::where('value', 'regular')->count() ?? 0;
        $goodCount = SatisfactionSurvey::where('value', 'bueno')->count()?? 0;
        return view('front.survey-counter.survey-counter',[
            'badCount' => $badCount,
            'regularCount' => $regularCount,
            'goodCount' => $goodCount,
        ]);
    }
}
