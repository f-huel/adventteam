<?php

$ari = file('input.txt', FILE_IGNORE_NEW_LINES);

$total = 0;
foreach ($ari as $quesar) {
    $temp = explode(':', $quesar);
    $quesar = $temp[1];
    $sets = explode(';', $quesar);
    $red = 0;
    $green = 0;
    $blue = 0;
    foreach ($sets as $set) {
        $blocks = explode(',', $set);
        foreach ($blocks as $block) {
            if (str_contains($block, 'red') && $red < intval($block)) {
                $red=intval($block);
            } else if (str_contains($block, 'green') && $green < intval($block)) {
                $green=intval($block);
            } else if(str_contains($block, 'blue') && $blue < intval($block)) {
                $blue=intval($block);
            }
        }
    }
    $power = $red * $green * $blue;
    $total+=$power;
}
echo $total . PHP_EOL;

?>