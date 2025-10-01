<?php
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
echo bilanganTerbesar(100, 150); // Output: 150
?>
