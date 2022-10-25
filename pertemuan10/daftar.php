<?php
$handphone = "" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <h1>Daftar Handphone Terbaru</h1>

    <table border="" cellpadding="10" cellspacing="0">
        <tr><?php foreach ( $handphone as $hp ): ?>
            <th>No.</th>
            <th>Merk</th>
            <th>Buatan</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>Gambar</th>
        </tr><?php endforeach; ?>
    </table>
</body>
</html>