@extends('template')
@section('judul_halaman', 'Data Penggajian')
@section('konten')

    <title>Penggajian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Penggajian</h3>
    <a href="{{ route('penggajian.create') }}" class="btn btn-primary mb-3">Beli</a>

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
            <tr>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->gajipokok }}</td>
                <td>{{ $item->Potongan }}</td>
                <td>Rp {{ number_format($item->gajipokok - potongan, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->gajibersih/gajipokok * 100%, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('penggajian.destroy', $item->ID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
