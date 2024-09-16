<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'phone',
        'product_id',
        'is_active'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
