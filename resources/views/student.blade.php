<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->nim }}</td>
                <td>{{ $student->prodi }}</td>
                <td>{{ $student->angkatan }}</td>
                <td>{{ $student->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>