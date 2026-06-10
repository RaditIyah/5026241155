<?php

namespace App\Http\Controllers;

use App\Models\KeranjangBelanja;
use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = KeranjangBelanja::all();
        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        KeranjangBelanja::create([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        KeranjangBelanja::findOrFail($id)->delete();

        return redirect('/');
    }
}
