<?php

$ari = file('input.txt', FILE_IGNORE_NEW_LINES);

$IDsum = 0;
foreach ($ari as $quesar) {
    $id = intval(substr($quesar, 5, 3));
    $temp = explode(':', $quesar);
    $quesar = $temp[1];
    $sets = explode(';', $quesar);
    $save = True;
    foreach ($sets as $set) {
        $blocks = explode(',', $set);
        $red = 0;
        $green = 0;
        $blue = 0;
        foreach ($blocks as $block) {
            if (str_contains($block, 'red')) {
                $red+=intval($block);
            } else if (str_contains($block, 'green')) {
                $green+=intval($block);
            } else if(str_contains($block, 'blue')) {
                $blue+=intval($block);
            }
        }
        if ($red > 12 || $green > 13 || $blue > 14) {
            $save = False;
        }
    }
    if ($save) {
        $IDsum+= $id;
    }
}

echo $IDsum . PHP_EOL;

?>