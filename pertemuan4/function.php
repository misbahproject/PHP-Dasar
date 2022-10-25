<?php

// parameter default
// kalau nggak ada parameter yg dikirimkan maka akan menggunakan parameter default
// tapi kalau parameter diisi maka parameter default ditimpa
function salam( $waktu = "Datang", $nama = "Admin" ) {
    return "Selamat $waktu $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Admin"); ?></h1>
</body>
</html>