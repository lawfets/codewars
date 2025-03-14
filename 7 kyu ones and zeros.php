<?php // 7 kyu ones and zeros.php

function binaryArrayToNumber(array $arr) {
    $decimal = 0;
    $arr = array_reverse($arr);
    for($i = count($arr) - 1; $i > 0; $i--)
    {
        if ($arr[$i] === 1)
        $decimal += 2**$i;
    }
    if ($arr[0] === 1)
    {
        $decimal += 1;
    }
    return $decimal;
}

echo binaryArrayToNumber([0, 0, 0, 1]). "\n";
echo binaryArrayToNumber([0, 0, 1, 0]). "\n";
echo binaryArrayToNumber([1, 1, 1, 1]). "\n";
echo binaryArrayToNumber([0, 1, 1, 0]). "\n";