<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id'
    ];

    protected function DetailOrder(){
        return $this->hasMany(DetailOrder::class);
    }
    use HasFactory;
}
