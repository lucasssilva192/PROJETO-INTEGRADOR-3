<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'status', 'address', 'cc_number'];

    public function items(){
        return OrderItem::where('order_id','=',$this->id)->get();
    }
}
