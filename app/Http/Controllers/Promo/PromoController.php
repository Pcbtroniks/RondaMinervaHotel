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

    private $ReceptionEmail = 'jeanmacario048@gmail.com'; 

    private Promos $promoRepo;

    public function __construct(Promos $promoRepo){

        $this->promoRepo = new $promoRepo;
    
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
        
        return;

        $data = $request->validate([
            'name' =>   'required',
            'phone'=>   'required',
            'email'=>   'required',
            'card'=>   'nullable',
            'amount_of_people'=>   'nullable',
            'message'=>   'nullable',
        ]);

        $data['code'] = $code ?? '';

        Mail::to($this->ReceptionEmail)->queue(new PromoCodeMailable($data));

    }

    public function pdf($data = false){

        // $pdf = App::make('dompdf.wrapper');

        $data = $this->promoRepo->dumpyData();

        $pdf = PDF::loadView('promos.pdf', compact('data'));

        
        // $pdf->loadView('promos.pdf');

        return $pdf->download('promo-cupon.pdf');
        
        return $pdf->stream();
    }
}
