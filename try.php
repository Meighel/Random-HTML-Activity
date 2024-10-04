<?php

    $num = 1352479;
    $sum = 0;

    while ($num != 0) {
        $remain = $num % 10;
        if ($remain % 2 == 0){
            $sum = $sum + 0;
        } else {
            $sum = $remain + $sum;
        }

        $num = $num - $remain;
    }

    echo $sum;