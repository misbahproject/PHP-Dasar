<?php

// $mahasiswa = [
//     ["M.Misbahul Munir", "008892004", "misbahulmunir601@gmail.com", "Rekayasa Perangkat Lunak"],
//     ["Aji Kusuma Jaya", "008892003", "ajikusumajaya@gmail.com", "Teknik Komputer dan Jaringan"]
// ]

// Array Associative
// Definisinya sama seperti array numerik kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "M.Misbahul Munir",
        "nrp" => "008892004",
        "email" => "mmisbahulmunir601@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "1.jpg"
    ],
    
    [
        "nama" => "Aji Kusuma Jaya",
        "nrp" => "008892003",
        "email" => "ajikusumajaya@gmail.com",
        "jurusan" => "Teknik Komputer dan Jaringan",
        "gambar" => "2.jpg"
    ]
    
];

// Kalau numerik urutan nya yang penting
// Kalau key-nya benar maka nggak masalah kalau tidak urut
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head> 
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>