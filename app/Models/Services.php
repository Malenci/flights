<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'interest', 'category_id', 'airline_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
