<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'price',
        'description',
        'slug',
    ];
    public function cart(){
        return $this->hasMany(Cart::class,'product_id','id');
    }
    public function product_gallery(){
        return $this->hasMany(ProductGallery::class,'product_id','id');
    }
    public function product_item(){
        return $this->hasMany(ProductItem::class,'product_id','id');
    }
}
