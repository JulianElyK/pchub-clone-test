<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id'
    ];
    use HasFactory;

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
