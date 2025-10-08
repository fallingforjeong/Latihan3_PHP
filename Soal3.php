<?php
// Membuat array asosiatif multidimensi berisi 3 produk e-commerce
$produk = [
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Elektronik",
        "harga" => 250000,
        "rating" => 4.7
    ],
    [
        "nama" => "Sneakers Sport",
        "kategori" => "Fashion",
        "harga" => 450000,
        "rating" => 4.8
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Komputer",
        "harga" => 150000,
        "rating" => 4.5
    ]
];

// Menentukan produk dengan harga tertinggi
$tertinggi = $produk[0];
for ($i = 1; $i < count($produk); $i++) {
    if ($produk[$i]['harga'] > $tertinggi['harga']) {
        $tertinggi = $produk[$i];
    }
}

// Cetak produk dengan harga tertinggi
echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama Produk: " . $tertinggi['nama'] . "<br>";
echo "Kategori: " . $tertinggi['kategori'] . "<br>";
echo "Harga: Rp" . number_format($tertinggi['harga'], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi['rating'];
?>
