<?php
$input = file('input.txt', FILE_IGNORE_NEW_LINES);

function has_symbol($char) {
    return (str_contains($char, '*') || str_contains($char, '#') || str_contains($char, '$') || str_contains($char, '+'));
}

$sum = 0;
$currentnumber = 0;
$numberflag = true;

// Initialize variables
$starti = $startj = $endi = $endj = 0;

// Iterate through each character in the input
for ($i = 0; $i < count($input); $i++) {
    for ($j = 0; $j < strlen($input[$i]); $j++) {
        $char = $input[$i][$j];
        $symbolflag = false;
        if (is_numeric($char)) {
            if ($numberflag) {
                $numberflag = false;
                $starti = $i;
                $startj = $j;
                $currentnumber = $char;
            } else {
                $endi = $i;
                $endj = $j;
                $currentnumber .= $char;
            }
        } else {
            $symbolflag = false;
            $numberflag = true;

            // Check surroundings for symbols
            if (isset($input[($starti - 1)][($startj - 1)])) {
                if (has_symbol($input[($starti - 1)][($startj -1)])) {
                    $symbolflag = true;
                }
            }
            if (isset($input[($starti - 1)])) {
                if (has_symbol(substr($input[($starti - 1)], $startj, strlen((string)$currentnumber)))) {
                    $symbolflag = true;
                }
            }
            if (isset($input[($starti - 1)][($endj + 1)])) {
                if (has_symbol($input[($starti - 1)][($endj + 1)])) {
                    $symbolflag = true;
                }
            }
            if (isset($input[$starti][($startj - 1)])) {
                if (has_symbol($input[$starti][($startj - 1)])) {
                    $symbolflag = true;
                }
            }
            if (isset($input[$starti][($endj + 1)])) {
                if (has_symbol($input[$starti][($endj + 1)])) {
                    $symbolflag = true;
                }
            }
            if (isset($input[($starti + 1)][($startj - 1)])) {
                if (has_symbol($input[($starti + 1)][($startj -1)])) {
                    $symbolflag = true;
                }
            }
            if (isset($input[($starti + 1)])) {
                if (has_symbol(substr($input[($starti + 1)], $startj, strlen((string)$currentnumber)))) {
                    $symbolflag = true;
                }
            }
            if (isset($input[($starti + 1)][($endj + 1)])) {
                if (has_symbol($input[($starti + 1)][($endj + 1)])) {
                    $symbolflag = true;
                }
            }

            
            if ($symbolflag) {
                $sum += (int)$currentnumber;
                $currentnumber = 0;
                echo "Added $currentnumber\n";
            }
        }
        echo "$char at value: $sum with $symbolflag\n";
    }
}
echo $sum;