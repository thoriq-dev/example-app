<?php

namespace App\Http\Controllers;

use App\Models\SalesContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesContactController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari table sales_contacts
        $contacts = SalesContact::all();

        // Menampilkan view dengan data kontak
        return view('contact.index', ['contacts' => $contacts]);
    }

    // Menampilkan form untuk menambah kontak baru
    public function create()
    {
        $contact = new SalesContact();
        return view('contact.create');
    }

    // Meyimpan kontak baru ke database
    public function store(Request $request)
    {
        // Validasi data yang dikirim ke database
        $request->validate([
            'name' => 'required|max:100',
            'position' => 'nullable|max:100',
            'email' => 'required|email|unique:sales_contacts,email',
            'phone' => 'nullable|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Menyimpan Foto jika ada
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $fileName);
            $photoPath = 'images/' . $fileName;
        } else {
            $photoPath = null;
        }
        // Menyimpan data kotak ke database
        SalesContact::create([
            'name' => $request->name,
            'position' => $request->position,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $photoPath,
        ]);
        return redirect()->route('contact.index')->with('success', 'Contact Added Successfully !');
    }
    // Menampilkan Kontak di Database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'position' => 'nullable|max:100',
            'email' => 'required|email|unique:sales_contacts,email' . $id,
            'phone' => 'required|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $contact = SalesContact::findOrFail($id);
        // Mengupload Foto jika ada
        if ($request->hasFile('photo')) {
            try {
                $fileName = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('images'), $fileName);
                $photoPath = 'images/' . $fileName;
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['photo' => 'Upload failed, please try again.']);
            }
            $fileName = time() . '.' . $request->photo->extension(); // Ini duplikat
            $request->photo->move(public_path('images'), $fileName); // Ini juga duplikat
            $photoPath = 'images/' . $fileName;
        } else {
            $photoPath = $contact->photo;
        }
        $contact->update([
            'name' => $request->name,
            'position' => $request->position,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $photoPath
        ]);
        return redirect()->route('contact.index')->with('success', 'Contact Updated Successfully !');
    }


    // Menghapus Contact
    public function destroy($id)
    {
        $contact = SalesContact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact Deleted Successfully !');
    }
}
