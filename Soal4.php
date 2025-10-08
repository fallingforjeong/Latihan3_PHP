<?php
// Membuat array 2 dimensi 3x3 berisi angka acak (1–9)
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9); // menghasilkan angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks
echo "<b>Matriks 3x3:</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $total += $matriks[$i][$j];
    }
}

echo "<br><b>Jumlah total semua elemen = " . $total . "</b>";
?>
