<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $subtotal = $buah[$i][1] * $buah[$i][2];
    $total += $subtotal;
    echo "Total nilai " . $buah[$i][0] . " = Rp" . number_format($subtotal, 0, ',', '.') . "<br>";
}

echo "<br><b>Total nilai seluruh buah = Rp" . number_format($total, 0, ',', '.') . "</b>";
?>
