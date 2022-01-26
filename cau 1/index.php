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

function sortArray($array)
{
    for ($i =0;$i<count($array);$i++){
        $min = $array[$i];
        $index = $i;
        for ($j = $i+1;$j = count($array);$j++){
            if ($min > $array[$j]){
                $min = $array[$j];
                $index = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $min;
        $array[$index] = $temp;
    }
}

