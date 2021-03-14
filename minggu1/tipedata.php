<?php
$nim = "A22.2020.02819";
$nama = 'M. Abiyyu Adilfi';
$umur = 19;
$nilai = 85.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>