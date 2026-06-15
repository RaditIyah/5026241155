<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller {

    public function index() {
        $data = Penggajian::all();
        return view('penggajian.index', compact('data'));
    }

    public function create() {
        $daftarNip = Penggajian::pluck('nip')->toArray(); // untuk validasi JS
        return view('penggajian.create', compact('daftarNip'));
    }

    public function store(Request $request) {
        Penggajian::create([
            'nip'       => $request->nip,
            'gajipokok' => $request->gajipokok,
            'potongan'  => $request->potongan,
        ]);
        return redirect()->route('penggajian.index');
    }
}
