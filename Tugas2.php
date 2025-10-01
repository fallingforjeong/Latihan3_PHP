<?php
// Ambil tanggal sekarang
$sekarang = getdate();

// Format dd-mm-yyyy
$tanggal = $sekarang["mday"];
$bulan   = $sekarang["mon"];
$tahun   = $sekarang["year"];

echo "Sekarang Tanggal : " . $tanggal . "-" . $bulan . "-" . $tahun;
?>
