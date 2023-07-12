<?php
function hitungKata($kalimat, $kata) {
    $panjangkalimat = strlen($kalimat);
    $panjangkata = strlen($kata);
    $a = 0;

    for ($i = 0; $i <= $panjangkalimat - $panjangkata; $i++) {
        $cocok = true;
        for ($j = 0; $j < $panjangkata; $j++) {
            if ($kalimat[$i + $j] !== $kata[$j]) {
                $cocok = false;
                break;
            }
        }
        if ($cocok) {
            $a++;
        }
    }

    return $a;
}

// Contoh penggunaan
$kalimat = "ababab";
$kata = "aba";
$hasil = hitungKata($kalimat, $kata);
echo $hasil;
