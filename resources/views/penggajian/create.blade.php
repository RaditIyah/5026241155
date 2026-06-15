@extends('template')
@section('judul_halaman', 'Data Penggajian')
@section('konten')

    <br>
    <a href="/penggajian" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="/penggajian/store" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NIP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="nip" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Gaji Pokok" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="gajipokok" id="gajipokok" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Potongan" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="Potongan" id="potongan" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Gaji Bersih" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="gajibersih" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Persentase Potongan" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="persentase potongan" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
