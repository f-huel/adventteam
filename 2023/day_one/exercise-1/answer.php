<?php

function calculateCalibrationValue($line) {
    $firstDigit = intval($line[0]);
    $lastDigit = intval(substr($line, -1));
    $calibrationValue = $firstDigit * 10 + $lastDigit;

    return $calibrationValue;
}

$csvFilePath = "input.csv";
$rows = array_map('str_getcsv', file($csvFilePath));

$totalCalibrationValue = 0;

foreach ($rows as $row) {
    if (count($row) > 0) {
        $line = $row[0];
        $calibrationValue = calculateCalibrationValue($line);
        echo "$calibrationValue\n";

        $totalCalibrationValue += $calibrationValue;
    }
}

echo "Total Calibration Value: $totalCalibrationValue\n";

?>