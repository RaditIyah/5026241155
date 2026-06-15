<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('penggajian')->get();

        // Memanggil file view di folder resources/views/keranjangbelanja/index.blade.php
        return view('penggajian.index', compact('penggajian'));
    }

    public function create()
    {
        // Memanggil file view di folder resources/views/keranjangbelanja/create.blade.php
        return view('penggajian.create');
    }

    public function store(Request $request)
    {
        // Validasi input harus berupa angka
        $request->validate([
            'NIP' => 'required|integer',
            'Gaji Pokok' => 'required|integer|min:1',
            'Potongan' => 'required|integer|min:0',
        ]);

        // Insert data ke database
        DB::table('keranjangbelanja')->insert([
            'NIP' => $request->nip,
            'Gaji Pokok' => $request->gajipokok,
            'Potongan' => $request->potongan,
        ]);

        // Redirect ke halaman index keranjangbelanja
        return redirect()->route('penggajian.index')->with('success', 'Penggajian berhasil dihitung.');
    }

    public function destroy($id)
    {
        // Hapus data berdasarkan ID (Tombol Batal)
        DB::table('penggajian')->where('NIP', $nip)->delete();

        // Redirect ke halaman index keranjangbelanja
        return redirect()->route('penggajian.index')->with('success', 'Perhitungan penggajian berhasil dibatalkan.');
    }
}
