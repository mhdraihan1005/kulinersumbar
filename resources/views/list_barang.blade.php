<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
</head>
<body>
    <h2>Daftar Barang</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $barang)
                <tr>
                    <td>{{ $barang['id'] }}</td>
                    <td>{{ $barang['nama'] }}</td>
                    <td>{{ $barang['harga'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak ada data tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
