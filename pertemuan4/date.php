<?php

// Date
echo date("l, d-M-Y");
echo "<br>";


// Mktime
// membuat sendiri detik
// parameter ada 6
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,12,11,2004));


// Time
// detik yang sudah berlalu sejak 1 January 1970
// echo time();
echo date("d M Y", time()+60*60*24*100);
echo "<br>";


// strtotime
// menggunakan string
echo date("l", strtotime("11 Dec 2004"));
?>
