<?php

namespace App\Repositories;

use App\Models\Promo;
use Illuminate\Http\Request;

class Promos {


    public function savePromo(Request $request, string $PromoCode, Promo $promo){
        
        $promo->code = $PromoCode;
        $promo->name = $request->name;
        $promo->email = $request->email;
        $promo->phone = $request->phone;
        $promo->status = 'active';
        $promo->message = $request->message;
        $promo->card = $request->card ?? '';
        $promo->amount_of_people = $request->amount_of_people;

        $promo->save();
    }

    public function verify($promo_code){
        
        return Promo::where('code', $promo_code)->first();

    }

    public static function dumpyData(){
        return $data = ['name'=>'Jean Langarica', 'phone'=>'3312526675', 'email'=>'jeanlangarica@outlook.com', 'amount_of_people'=>2, 'card'=>'4242', 'message'=>null, 'code'=>'srXEDta1N'];
    }
}