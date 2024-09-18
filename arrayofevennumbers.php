<?php

$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$rowCount = count($matrix);
$rowIndex = 0;

while ($rowIndex < $rowCount) {
    $colCount = count($matrix[$rowIndex]);
    $colIndex = 0;

    while ($colIndex < $colCount) {
        $value = $matrix[$rowIndex][$colIndex];
        if ($value % 2 == 0) {
            echo "$value\n";
        }
        $colIndex++;
    }

    $rowIndex++;
}

