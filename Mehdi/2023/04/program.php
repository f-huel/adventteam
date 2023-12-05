<?php

$file = FILE('input.txt', FILE_IGNORE_NEW_LINES);

$sum = 0;
foreach($file as $card) {
    $temp = explode(':', $card);
    $card = $temp[1];
    $split = explode('|', $card);
    $res = array_filter(array_intersect(explode(' ', $split[0]), explode(' ', $split[1])), 'is_numeric');
    $count = 0;

    if (count($res) > 0) {
        $count = 1;
        for ($i = 1; $i < count($res); $i++) {
            $count*=2;
        }
    }
    $sum+=$count;
}

echo "Part 1 Answer: $sum\n";
?>