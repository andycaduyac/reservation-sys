<?php

namespace App\Models\Admin;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accommodation extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function bookings(){
        return $this->hasMany(Booking::class, 'accommodation_id');
    }
}
