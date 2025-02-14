<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit data</title>
</head>
<body>
<form action="{{ route('products.update',$product->id) }}" method="post">
        @csrf
        @method('PUT')
        <p>
            <label for="kode">Kode Produk: </label>
            <input type="number" id="kode" name="code" value="{{ $product->code }}">
        </p>
        <p>
            <label for="nama">Nama Produk: </label>
            <input type="text" id="nama" name="nama" value="{{ $product->name }}">
        </p>
        <p>
            <label for="deskripsi">Deskripsi: </label><br>
            <textarea name="deskripsi" id="deskripsi"  cols="30">{{ $product->description }}</textarea>
        </p>
        <p>
            <label for="kuantitas">Kuantitas: </label>
            <input type="number" id="kuantitas" name="kuantitas" value="{{ $product->qty }}">
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="number" id="harga" name="harga" value="{{ $product->price }}">
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>
</body>
</html>