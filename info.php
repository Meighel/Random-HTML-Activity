<?php

function calculateTriangleArea($side1, $side2, $side3) {

    $s = ($side1 + $side2 + $side3) / 2;

    $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);

    $area = 1;
    for ($i = 0; $i < 100; $i++) { 
        $area = 0.5 * ($area + $areaSquared / $area);
    }

    return round($area, 2); 
}

$side1 = 5;
$side2 = 6;
$side3 = 7;


if ($side1 + $side2 > $side3 && $side2 + $side3 > $side1 && $side3 + $side1 > $side2) {

    $area = calculateTriangleArea($side1, $side2, $side3);
    echo "The area of the triangle with sides $side1, $side2, and $side3 is: $area square units.";
} else {
    echo "The values provided cannot form a valid triangle.";
}

