<?php

namespace App\Http\Controllers;

use App\Models\Car;  // Sesuaikan nama model
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        // Ambil data dari database menggunakan model
        $models = Car::all();  // Sesuaikan dengan kebutuhan

        // Kirim data ke view 'models.index'
        return view('models.index', compact('models'));
    }
    public function show($id)
    {
        $model = Car::findOrFail($id); // Cari model berdasarkan ID
        return view('models.show', compact('model')); // Kirim variabel $model ke view
    }
}
