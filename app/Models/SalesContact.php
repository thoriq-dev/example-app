<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesContact extends Model
{
    use HasFactory;

    // Menentukan Table yang digunakan
    protected $table = 'sales_contacts';

    // Menentukan Kolom yang bisa di-isi secara massal (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'photo'
    ];
}
