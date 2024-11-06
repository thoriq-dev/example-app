<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',             // Kolom make
        'model',            // Kolom model
        'year',             // Kolom year
        'engine',           // Kolom engine
        'power',            // Kolom power
        'fuel_type',        // Kolom fuel_type
        'seating_capacity', // Kolom seating_capacity
        'description',      // Kolom description
        'image',            // Kolom image
        'price',                // Kolom price
    ];

    public function images()
    {
        return $this->hasMany(Image::class);  // Relasi one-to-many dengan model Image
    }
}
