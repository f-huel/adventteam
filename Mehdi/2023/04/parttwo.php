<?php

// Read file
$file = FILE('input.txt', FILE_IGNORE_NEW_LINES);

//Initialize array for amount of scratchcards
$index = array();
for ($i = 0; $i <= count($file); $i++) {
    array_push($index, 1);
}

//initialize sum var
$sum = 0;

// The logic as described in the README
foreach($file as $card) {
    $temp = explode(':', $card);
    $id = intval(substr($temp[0], 4));
    $card = $temp[1];
    $split = explode('|', $card);
    $res = count(array_filter(array_intersect(explode(' ', $split[0]), explode(' ', $split[1])), 'is_numeric'));
    for ($j = 0; $j < $index[$id]; $j++) {
        for ($i = 1; $i <= $res; $i++) {
            $index[$i + $id]++;
        }
    }
}

//Calculate and print out sum, fix for [0] by subtracting 1
foreach($index as $id) {
    $sum+=$id;
}
$sum--;
echo "Part 2 Answer: $sum\n";
?>