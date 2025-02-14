<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1 class="mb-4">Form Tambah Data Produk</h1>
    
    <form action="{{ route('products.store') }}" method="post" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Produk</label>
            <input type="number" id="kode" name="code" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="kuantitas" class="form-label">Kuantitas</label>
            <input type="number" id="kuantitas" name="kuantitas" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" name="harga" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
