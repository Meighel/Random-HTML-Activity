<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $side1 = floatval($_POST['side1']);
        $side2 = floatval($_POST['side2']);
        $side3 = floatval($_POST['side3']);

        $s = ($side1 + $side2 + $side3) / 2;

        $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
        $area = pow($areaSquared, 1/2);  

        if (isset($area)) {
            echo "<div class='result'>$area</div>";
        }
        echo "<div class='result'>The area of the triangle is: " . number_format($area, 2) . " square units</div>";
            }
?>
