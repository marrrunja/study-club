<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product View</title>
    <style>
        body {
            font-family: Helvetica,sans-serif;
        }
    </style>
</head>
<body>
    @if (session('status'))
        {{ session('status') }}
    @endif
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Deksripsi</th>
                <th>Kuantitas</th>
                <th>Harga</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>