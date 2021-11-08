<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $guarded = [
        'id'
    ];

    protected function Order(){
        return $this->belongsTo(Order::class);
    }

    protected function Product(){
        return $this->belongsTo(Product::class);
    }

    use HasFactory;
}
