<?php
function hitungHuruf($input)
{
    $input = str_split($input); // Mengubah input menjadi array karakter
    $count = array();

    foreach ($input as $char) {
        if (!array_key_exists($char, $count)) {
            $count[$char] = 1;
        } else {
            $count[$char]++;
        }
    }

    uksort($count, function($a, $b) {
        return strcasecmp($a, $b);
    });

    return $count;
}

// Contoh penggunaan
$input = "MasyaAllah";
$hasilHitung = hitungHuruf($input);
echo "[";
foreach ($hasilHitung as $char => $jumlah) {
    echo "'".$char."':".$jumlah.", ";
}
echo "]";

?>