<?php
function hitungKata($kalimat, $kata) {
    $panjangkalimat = strlen($kalimat);
    $panjangkata = strlen($kata);
    $count = 0;

    for ($i = 0; $i <= $panjangkalimat - $panjangkata; $i++) {
        $match = true;
        for ($j = 0; $j < $panjangkata; $j++) {
            if ($kalimat[$i + $j] !== $kata[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }

    return $count;
}

// Contoh penggunaan
$kalimat = "ababab";
$kata = "aba";
$hasil = hitungKata($kalimat, $kata);
echo $hasil;
