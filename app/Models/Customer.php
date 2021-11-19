<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
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
