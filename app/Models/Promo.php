<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'status',
        'message',
        'card',
        'amount_of_people',
    ];

    public static function getCount(){
        return Promo::all('code')->count();
    }
}
