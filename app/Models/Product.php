<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','description', 'price', 'category_id', 'image', 'tag_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public static function promocoes(){
        return Product::all()->take(2);
    }

    public static function maisComprados(){
        return Product::all()->take(3);
    }

    public function calculaPreco(){
        $this->price * (1 - $this->desconto);
    }
}
