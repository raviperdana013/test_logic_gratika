<?php
function cekAbjad($input)
{
    $input = str_split($input);
    $count = array();

    foreach ($input as $inputt) {
        if (!array_key_exists($inputt, $count)) {
            $count[$inputt] = 1;
        } else {
            $count[$inputt]++;
        }
    }

    uksort($count, function($a, $b) {
        return strcasecmp($a, $b);
    });

    return $count;
}

$input = "MasyaAllah";
$finalhasil = cekAbjad($input);
echo "[";
foreach ($finalhasil as $inputt => $jumlah) {
    echo "'".$inputt."':".$jumlah.", ";
}
echo "]";
