<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'email',
        'name',
        'password',
        'phone',
    ];

    protected function Order(){
        return $this->hasMany(Order::class);
    }
    use HasFactory;

    
}
