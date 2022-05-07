<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'phone',
        'courier',
        'payment',
        'payment_url',
        'total_price',
        'status',
    ];
    public function transaction_item(){
        return $this->hasMany(TransactionItem::class,'transaction_id','id');
    }
}
