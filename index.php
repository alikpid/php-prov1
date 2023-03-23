<?php

function fill_arrays(&$xArr, &$yArr, &$zArr): void {
    $xArr = [];
    $yArr = [];
    $zArr = [];

    for ($i = 0; $i < 6; $i++) {
        $xArr[] = rand(1, 100);
        $yArr[] = rand(1, 100);
        $zArr[] = rand(1, 100);
    }
}

$xArr = [];
$yArr = [];
$zArr = [];
fill_arrays($xArr, $yArr, $zArr);

$uArr = array_merge($xArr, $yArr, $zArr);

foreach ($uArr as &$u){
    $u = (int) decoct($u);
}

asort($uArr);

echo '<pre>';
print_r($uArr);
echo '</pre>';

$uArr = array_slice($uArr, -5, 5);
echo 'The largest numbers in the array: ' . implode(', ', $uArr);

