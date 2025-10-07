<?php
// Matriks A
$A = array(
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2)
);

// Matriks B
$B = array(
    array(1, 1, 1),
    array(3, 3, 3),
    array(1, 1, 1)
);

// Matriks hasil penjumlahan
$hasil = array();

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {          // baris
    for ($j = 0; $j < 3; $j++) {      // kolom
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan hasil penjumlahan
echo "<h3>Hasil Penjumlahan Matriks A + B:</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "<br>";
}
?>
