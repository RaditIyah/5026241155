@extends('template')
@section('judul_halaman', 'Data Penggajian')
@section('konten')

<div class="container mt-4">
    <h5>Tambah Data Penggajian</h5>

    <form id="formTambah" action="{{ route('penggajian.store') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">NIP</label>
            <div class="col-sm-6">
                <input type="text" name="nip" id="nip" class="form-control" maxlength="8" required>
                <small id="errorNip" class="text-danger"></small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Gaji Pokok</label>
            <div class="col-sm-6">
                <input type="number" name="gajipokok" id="gajipokok" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Potongan</label>
            <div class="col-sm-6">
                <input type="number" name="potongan" id="potongan" class="form-control" required>
                <small id="errorPotongan" class="text-danger"></small>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6 offset-sm-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('penggajian.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>

@endsection
