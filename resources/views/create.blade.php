<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<form action="/simpan" method="POST">
    @csrf

    <p>Kode Barang</p>
    <input type="text" name="KodeBarang">

    <p>Jumlah</p>
    <input type="text" name="Jumlah">

    <p>Harga</p>
    <input type="text" name="Harga">

    <br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
