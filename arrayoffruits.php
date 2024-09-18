<?php

$fruits = ['apple', 'banana', 'orange', 'watermelon', 'lemon'];

$count = count($fruits);

for ($i = 0; $i < $count; $i++) {
    $a = $i + 1;
    echo "$a. $fruits[$i]\n";
}


