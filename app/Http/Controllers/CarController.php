<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); // Hanya ambil sekali
        return view('models.index', compact('cars')); // Kirim dengan nama variabel yang konsisten
    }

    public function show($id)
    {
        // Eager load relasi images dengan menggunakan with()
        $car = Car::with('images')->findOrFail($id); // Eager load relasi images
        return view('cars.show', compact('car'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        // Validasi Data
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'engine' => 'required|string|max:255',
            'power' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'seating_capacity' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            'price' => 'required|numeric',
        ]);

        // Upload gambar dan simpan path-nya
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('car_images'), $imageName);
            $imagePath = 'car_images/' . $imageName;
        }

        // Simpan data mobil ke database dan simpan hasilnya ke dalam variabel $car
        $car = Car::create([
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'engine' => $request->engine,
            'power' => $request->power,
            'fuel_type' => $request->fuel_type,
            'seating_capacity' => $request->seating_capacity,
            'description' => $request->description,
            'image' => $imagePath,  // Simpan path gambar
            'price' => $request->price,
        ]);

        // Simpan data gambar ke tabel images
        $car->images()->create([
            'filename' => $imageName,
        ]);

        // Perbaikan route redirect ke rute yang benar
        return redirect()->route('cars.index')->with('success', 'Car added successfully.');
    }


    public function update(Request $request, $id)
    {
        // Validasi Data
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'engine' => 'required|string|max:255',
            'power' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'seating_capacity' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $car = Car::findOrFail($id);

        // Cek jika ada file gambar baru
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('car_images'), $imageName);
            $imagePath = 'car_images/' . $imageName;

            // Hapus gambar lama jika ada dan file baru di-upload
            if ($car->image && file_exists(public_path($car->image))) {
                unlink(public_path($car->image));
            }
        } else {
            // Gunakan gambar lama jika tidak ada file baru
            $imagePath = $car->image;
        }

        // Update data mobil ke database
        $car->update([
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'engine' => $request->engine,
            'power' => $request->power,
            'fuel_type' => $request->fuel_type,
            'seating_capacity' => $request->seating_capacity,
            'description' => $request->description,
            'image' => $imagePath,  // Simpan nama file gambar baru atau gambar lama
            'price' => $request->price,
        ]);

        // Perbaikan route redirect ke rute yang benar
        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    public function edit($id)
    {
        // Ganti find dengan findOrFail untuk mengatasi null dan otomatis lempar 404 jika tidak ada data
        $car = Car::findOrFail($id);
        return view('cars.update', compact('car'));
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($car->image && file_exists(public_path($car->image))) {
            unlink(public_path($car->image));
        }

        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car Deleted Successfully');
    }
}
