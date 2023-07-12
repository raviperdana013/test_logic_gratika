<?php
function sortArray($array) {
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
    
    $sortedArray = array_merge($abjad, $angka);
    
    return $sortedArray;
}

$array = array(12, 9, 30, 'A', 'M', 99, 82, 'J', 'N', 'B');

$sortedArray = sortArray($array);
print_r($sortedArray);

?>
