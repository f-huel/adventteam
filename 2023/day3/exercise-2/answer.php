<?php

$board = file('input.txt', FILE_IGNORE_NEW_LINES);
$chars = [];

for ($r = 0; $r < 140; $r++) {
    for ($c = 0; $c < 140; $c++) {
        if (!in_array($board[$r][$c], ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.'])) {
            $chars["$r,$c"] = [];
        }
    }
}

foreach ($board as $r => $row) {
    preg_match_all('/\d+/', $row, $matches, PREG_OFFSET_CAPTURE);

    foreach ($matches[0] as $match) {
        list($number, $position) = $match;
        $edge = [];

        for ($r_offset = -1; $r_offset <= 1; $r_offset++) {
            for ($c_offset = -1; $c_offset <= strlen($number); $c_offset++) {
                $edge_key = ($r + $r_offset) . ',' . ($position + $c_offset);
                $edge[] = $edge_key;
            }
        }

        $common_edge = array_intersect(array_keys($chars), $edge);

        foreach ($common_edge as $o) {
            $chars[$o][] = (int)$number;
        }
    }
}

$part2 = array_sum(array_map(function ($p) {
    return count($p) === 2 ? array_product($p) : 0;
}, $chars));

echo "$part2\n";
