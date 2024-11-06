<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; // Menggunakan model Car

class HomeController extends Controller
{
    // Metode index untuk menampilkan data mobil
    public function index()
    {
        $data = [
            'products' => Car::all(), // Mengambil semua produk
        ];
        $cars = Car::all(); // Ambil semua mobil dari database
        return view('home.home', compact('cars')); // Kirimkan data $cars ke view
    }
}
