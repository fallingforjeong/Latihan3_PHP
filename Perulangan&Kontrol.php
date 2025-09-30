<?php
// Perulangan penjualan game dari 100 sampai 1000
for ($penjualan = 100; $penjualan <= 1000; $penjualan += 100) {

    // Kontrol grade berdasarkan jumlah penjualan
    if ($penjualan >= 900) {
        $grade = "A";
    } elseif ($penjualan >= 800) {
        $grade = "B";
    } elseif ($penjualan >= 700) {
        $grade = "C";
    } elseif ($penjualan >= 600) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Tampilkan hasil
    echo "Penjualan: " . $penjualan . " unit → Grade: " . $grade . "<br>";
}
?>
