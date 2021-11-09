<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [
        'id',
        'date'
    ];
    use HasFactory;

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    protected function Payment(){
        return $this->hasOne(Payment::class);
    }

    protected function Shipment(){
        return $this->hasOne(Shipment::class);
    }

    protected function DetailOrder(){
        return $this->hasMany(DetailOrder::class);
    }

}
