<?php

namespace App\Http\Controllers\Promo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\PromoCodeMailable;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Repositories\Promos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Promo;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PromoController extends Controller
{

    private $ReceptionEmail; 

    private Promos $promoRepo;

    public function __construct(Promos $promoRepo)
    {
        $this->promoRepo = new $promoRepo;
        $this->ReceptionEmail = 'jean.langarica@pcbtroniks.com';
    }

    public function index($promoCode = false) {
    
        return view('promos.register', compact('promoCode'));
    
    }
    
    
    public function register(Request $request, $PromoCode) {

        $promo = new Promo();

        $this->promoRepo->savePromo( request(), $PromoCode, $promo);

        $this->sendPromoByEmail($request, $PromoCode, $PromoCode);

    }
    
    public function verify($promo_code = '') {
    
        $promo = Promo::where('code', $promo_code)->first();
        
        return view('promos.verify', compact('promo'));
        
    }
    
    public function check() {

        $promo_code = request('code');
    
        $promo = $this->promoRepo->verify($promo_code);
        
        return view('promos.verify', compact('promo'));
        
    }

    public function getPromoCode(){

        $promoCode = $this->generatePromoCode();
        $promoCodeUrl  = route('promos.verify', ['promo_code'=> $promoCode]);

        $this->register(request(), $promoCode);
     
        return view('promos.getPromoCode', compact('promoCode', 'promoCodeUrl'));

    }

    public function generatePromoCode($prefix = null){

        $prefix = $prefix ?? '';
        return $prefix . Str::random(9);
    
    }

    public function sendPromoByEmail(Request $request, $code){
        
        $data = $request->validate([
            'name' =>   'required',
            'phone'=>   'required',
            'email'=>   'required',
            'card'=>   'nullable',
            'amount_of_people'=>   'nullable',
            'message'=>   'nullable',
        ]);

        $data['code'] = $code ?? '';

        return Mail::to([$this->ReceptionEmail, $data['email']])->queue(new PromoCodeMailable($data));

    }

    public function pdf($data = false){

        $data = $this->promoRepo->dumpyData();

        $pdf = PDF::loadView('promos.pdf', compact('data'));

        return $pdf->stream();
    }

    public function downloadCoupon($promo_code){

        $data = $this->promoRepo->verify($promo_code);

        $pdf = PDF::loadView('promos.pdf', compact('data'));

        return $pdf->stream();
    }
}
