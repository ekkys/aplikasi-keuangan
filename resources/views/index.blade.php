<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.curhatancoding.com</title>
</head>

<body>
    <h2>www.curhatancoding.com</h2>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah">+ Tambah Pegawai</a>
    <br><br>
    <table border="1">
        <th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
        </th>

        @foreach ($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->pegawai_nama }}</td>
                <td>{{ $pegawai->pegawai_jabatan }}</td>
                <td>{{ $pegawai->pegawai_umur }}</td>
                <td>{{ $pegawai->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit{{ $pegawai->pegawai_id }}">Edit</a>
                    <a href="/pegawai/hapus{{ $pegawai->pegawai_id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
