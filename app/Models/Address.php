<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'logradouro', 'numero', 'cep','bairro','cidade', 'estado'];

    static function enderecos(){
        return Address::where('user_id','=', Auth()->user()->id)->get();
    }
}
