<?php
$nilai=100;
echo "CONTOH IF ELSE <br>";
if($nilai>90) { echo "Selamat Anda mendapat grade A, Langsung Pilih Tirai 1 atau Tirai 2 <br>";}
else { echo "Maaf Anda belum dapat grade A, Dasar CUPU Sana Belajar Lagi <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
case 100 :echo "Nilai yang dipilih 100 <br>";
break;
case 90 :echo "Nilai yang dipilih 90 <br>";
break;
} echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) {
echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
echo "Looping While ke : ".$j."<br>";
$j++;
}
?>