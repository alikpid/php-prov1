<?php
$xArray = [];
for($i=0; $i<6; $i++) { $xArray[]=rand(1,100); }

$yArray = [];
for($i=0; $i<6; $i++) { $yArray[]=rand(1,100); }

$zArray = [];
for($i=0; $i<6; $i++) { $zArray[]=rand(1,100); }

$uArray = [];
$tempArray = array_merge($xArray, $yArray, $zArray);

for ($i = 0; $i < count($tempArray); $i++) {
    $uArray[$i] = (int) decoct($tempArray[$i]);
}
sort($uArray);

//echo '<pre>';
//print_r($xArray);
//echo '</pre>';
//
//echo '<pre>';
//print_r($yArray);
//echo '</pre>';
//
//echo '<pre>';
//print_r($zArray);
//echo '</pre>';

echo '<pre>';
print_r($uArray);
echo '</pre>';

$uArray = array_slice($uArray, -5, 5);
echo 'The largest numbers in the array: ' . implode(', ', $uArray);


