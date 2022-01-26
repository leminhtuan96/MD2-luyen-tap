<?php

function inputFloat($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[$i] = rand(-100, 100);
//        $arr[]= floatval($arr[$i]);   /* ép về kiểu số thực */
    }
    return $arr;
}

$arr = inputFloat(5);
print_r($arr);
echo "<br>";

function timMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return "so lon nhat la: " . $max . "<br>";
}

print_r(timMax($arr));


function timMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return "so nho nhat la: " . $min . "<br>";
}

print_r(timMin($arr));

function evenMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
    }
    return "so duong chan lon nhat: " . $max . "<br>";
}

print_r(evenMax($arr));

function evenMin($arr)
{
    $array = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 != 0 && $arr[$i] < 0) {
            $array[] = $arr[$i];
        }
    }
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return "so am le nho nhat:" . $min . "<br>";
}

print_r(evenMin($arr));

function sumArr($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return "tong mang la: " . $sum . "<br>";
}

print_r(sumArr($arr));

function avgSum($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return "trung binh cong la: " . round($sum / count($arr));
}

print_r(avgSum($arr));
echo "<br>";

function timMaxTB($arr)
{
    $array = [];
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    $avg = $sum / count($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $avg) {
            $array[] = $arr[$i];
        }
    }
    return $array;
}

echo "so lon hon TBC: ";
print_r(timMaxTB($arr));
echo "<br>";

function sortIn($arr)
{
    sort($arr);
    return $arr;
}

echo "Mang sap xep theo chieu tang dan: ";
print_r(sortIn($arr));
echo "<br>";

function sortDe($arr)
{
    rsort($arr);
    return $arr;
}
echo "mang sap xep theo chieu giam dan: ";
print_r(sortDe($arr));


//function soChinhPhuong($arr)
//{
//    $array = [];
//    for ($i = 0; $i < count($arr); $i++) {
//        $a = round(pow($arr[$i], 0.5), 2);
//        if ($arr[$i] == pow($a, 2)) {
//            $array[] = $arr[$i];
//        }
//    }
//    return "so chinh phuong: " . $array . "<br>";
//}
//
//print_r(soChinhPhuong($arr));