<?php
function createArray($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(1, 100);
    }
    return $arr;
}

$arr = createArray(5);
print_r($arr);
echo "<br>";

function sortArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $arr[$i];
        $index = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($min > $arr[$j]) {
                $min = $arr[$j];
                $index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $min;
        $arr[$index] = $temp;
    }
    return $arr;
}


print_r(sortArray($arr));
echo "<br>";

function eraseNumber($arr)
{
    $array = [];
    for ($i = 0; $i < count($arr); $i++){
        if (!in_array($arr[$i],$array)){
            $array[]=$arr[$i];
        }
    }
    return $array;
}print_r(eraseNumber([1,1,2,3,4,3,4,2,2,5]));