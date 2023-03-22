<?php
$a = (int) decoct(15);
echo $a;
echo gettype($a);

$xArray = [2, 4, 17, 47, 3];
$yArray = [83, 61, 29, 30, 12];
$zArray = [23, 62, 20, 83, 78];
$uArray = [];

for ($i= 0; max(count($xArray) + count($yArray)); $i++) {
//    if($xArray[$i] != null)
        $uArray[] = $i;
}
print_r($uArray);