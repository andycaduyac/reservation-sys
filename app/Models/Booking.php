<?php

namespace App\Models;

use App\Models\Admin\Accommodation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function accommodation(){
        return $this->belongsTo(Accommodation::class, 'accommodation_id', 'id');
    }


    public function customer(){
        return $this->hasMany(Customer::class, 'booking_id');
    }
}
