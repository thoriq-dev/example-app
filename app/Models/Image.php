<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'filename'];

    public function car()
    {
        return $this->belongsTo(Car::class);  // Relasi many-to-one dengan model Car
    }
}
