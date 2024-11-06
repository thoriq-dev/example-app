<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua konten dari database
        $contents = Content::all(); // Ganti dengan query sesuai kebutuhan

        // Mengirim data ke view
        return view('admin.content.index', compact('contents'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat konten baru
        return view('admin.content.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Menyimpan konten baru ke database
        Content::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        // Mengalihkan ke halaman index dengan pesan sukses
        return redirect()->route('admin.content.index')->with('success', 'Konten berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Menampilkan detail konten
        $content = Content::findOrFail($id);

        return view('admin.content.show', compact('content'));
    }

    public function edit($id)
    {
        // Mengambil konten berdasarkan ID
        $content = Content::findOrFail($id);

        // Menampilkan form untuk mengedit konten
        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Mengambil konten berdasarkan ID
        $content = Content::findOrFail($id);

        // Memperbarui konten di database
        $content->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        // Mengalihkan ke halaman index dengan pesan sukses
        return redirect()->route('admin.content.index')->with('success', 'Konten berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Mengambil konten berdasarkan ID
        $content = Content::findOrFail($id);

        // Menghapus konten dari database
        $content->delete();

        // Mengalihkan ke halaman index dengan pesan sukses
        return redirect()->route('admin.content.index')->with('success', 'Konten berhasil dihapus!');
    }
}
