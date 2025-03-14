<?php // 6 kyu persistent bugger.php

function persistence(int $num) {
    $arr = [];
    if($num < 10)
    {
        return 0;
    }
    
    while($num >= 10)
    {
        $total = 1;
        $digits = array_map('intval', str_split((string)$num));

        for ($i = 0; $i < count($digits); $i++)
        {
            $total *= $digits[$i];
        }
        $num = $total;
        array_push($arr, $num);
    }
    print_r($arr);

}
echo persistence(39)."<br>";
echo persistence(999)."<br>";
echo persistence(4)."<br>";

//999-> 729 -> 126 -> 12 -> 2
//39 -> 27 -> 14 -> 4
/* recursive formula
     return strlen($num) > 1 ? 1 + persistence(array_product(str_split($num))) : 0;
*/