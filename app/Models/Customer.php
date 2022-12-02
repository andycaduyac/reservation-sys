<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function bookings(){
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
