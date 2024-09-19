<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['name', 'code', 'city', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
