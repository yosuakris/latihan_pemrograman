<?php
//koneksi database dan pilih database
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mahasiswa');

//query isi tabel siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");



//ubah data ke dalam array
// $row = mysqli_fetch_row($result); // ini array numerik
//$row = mysqli_fetch_assoc($result); // ini array associative
//$row = mysqli_fetch_array($result); //keduanya
//while pengulangannya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//tampung ke variabel siswa
$siswa = $rows;

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa </title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($siswa as $m) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
                <td><?= $m['npm']; ?></td>
                <td><?= $m['nama']; ?></td>
                <td><?= $m['email']; ?></td>
                <td><?= $m['jurusan']; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>