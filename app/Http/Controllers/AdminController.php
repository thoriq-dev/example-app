<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Metode untuk menampilkan dashboard admin
    public function index()
    {
        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        // Logika untuk mengambil dan menampilkan daftar pengguna
        $users = User::all(); // Ambil semua pengguna
        return view('admin.users.index', compact('users'));
    }

    // Metode untuk menyimpan pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'boolean',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin ? true : false,
        ]);
        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil ditambahkan!');
    }
    // Metode untuk menampilkan formulir pengeditan pengguna
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user')); // Pastikan ada tampilan untuk mengedit pengguna
    }

    // Metode untuk memperbarui pengguna
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'is_admin' => 'boolean',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, hash dan simpan
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->is_admin = $request->is_admin ? true : false;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Metode untuk menghapus pengguna
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
