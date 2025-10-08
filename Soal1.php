<?php
// Membuat array 2 dimensi berisi 3 siswa (Nama, Nilai Matematika, Nilai Bahasa)
$siswa = [
    ["Nama" => "Andi",  "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi",  "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1]['Nama'] . ") adalah: " . $siswa[1]['Bahasa'] . "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i]['Nama'] . "<br>";
    echo "Nilai Matematika: " . $siswa[$i]['Matematika'] . "<br>";
    echo "Nilai Bahasa: " . $siswa[$i]['Bahasa'] . "<br><br>";
}
?>
