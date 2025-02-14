<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data ke View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1 class="mb-4">Data Produk</h1>
    
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID Produk</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Kuantitas</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>                        
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Data</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
