<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    
    <h3>Jumlah Pengguna: {{ $jumlahPengguna ?? 0 }}</h3> <!-- Mencegah error jika variabel tidak ada -->

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="4">Data tidak ditemukan</td>
        </tr>
    </table>
</body>
</html>
