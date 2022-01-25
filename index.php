<?php
function createArray($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(1, 100);
    }
    return $arr;
}

print_r(createArray(5));

