<?php

function calculateCalibrationValue($line) {
    preg_match('/\d/', $line, $matches);
    $firstDigit = intval($matches[0]);

    preg_match('/\d/', strrev($line), $matches);
    $lastDigit = intval($matches[0]);

    $calibrationValue = intval($firstDigit . $lastDigit);

    return $calibrationValue;
}

$csvFilePath = "input.csv";
$rows = array_map('str_getcsv', file($csvFilePath));

$totalCalibrationValue = 0;

foreach ($rows as $row) {
    if (count($row) > 0) {
        $line = $row[0];

        $calibrationValue = calculateCalibrationValue($line);

        echo "Calibration value for '$line': $calibrationValue\n";

        $totalCalibrationValue += $calibrationValue;
    }
}

echo "Total Calibration Value: $totalCalibrationValue\n";
?>
