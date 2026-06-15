@extends('template')
@section('judul_halaman', 'Data Penggajian')
@section('konten')

<div class="container mt-4">
    <a href="{{ route('penggajian.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NIP</th>
                <th>Gaji Pokok</th>
                <th>Potongan</th>
                <th>Gaji Bersih</th>
                <th>Persentase Potongan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            @php
                $gajiBersih = $item->gajipokok - $item->potongan;
                $persentase = ($item->gajipokok > 0)
                    ? ($item->potongan / $item->gajipokok) * 100
                    : 0;
            @endphp
            <tr>
                <td>{{ $item->nip }}</td>
                <td>{{ number_format($item->gajipokok, 0, ',', '.') }}</td>
                <td>{{ number_format($item->potongan, 0, ',', '.') }}</td>
                <td>{{ number_format($gajiBersih, 0, ',', '.') }}</td>
                <td>{{ number_format($persentase, 2) }}%</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
