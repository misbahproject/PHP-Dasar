<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>GET</title>
</head> 
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>