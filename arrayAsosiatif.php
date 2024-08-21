<?php

$siswa= array(
    "Keysha" => 90,
    "Nathan" => 65,
    "Alica" => 85,
    "Fanesha" => 70,
    "Raiden" => 80 
);

foreach ($siswa as $nama => $nilai) {
    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }
    echo "Nama : $nama, Nilai : $nilai, Keterangan : $keterangan" . "<br>";
}
?>