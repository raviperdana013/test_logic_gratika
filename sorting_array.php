<?php
function dataSorting($array) {
    $abjad = [];
    $angka = [];
    
    foreach ($array as $value) {
        if (is_numeric($value)) {
            $angka[] = $value;
        } else {
            $abjad[] = $value;
        }
    }
    
    sort($abjad);
    sort($angka);
    
    $dataterurut = array_merge($abjad, $angka);
    
    return $dataterurut;
}

$array = array(12, 9, 30, 'A', 'M', 99, 82, 'J', 'N', 'B');

$dataterurut = dataSorting($array);
print_r($dataterurut);

?>
