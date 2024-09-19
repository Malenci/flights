<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id', 'first_name', 'last_name', 'passport_number', 'date_of_birth', 'nationality', 'baggage_weight', 'seat_number'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
