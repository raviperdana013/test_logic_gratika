<?php
function pattern_count($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $match = true;
        for ($j = 0; $j < $patternLength; $j++) {
            if ($text[$i + $j] !== $pattern[$j]) {
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
$text = "ababab";
$pattern = "aba";
$result = pattern_count($text, $pattern);
echo $result;

?>