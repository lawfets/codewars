<?php
function digPow($n, $p) 
{
    $n_array = str_split((string)$n);
    $total = 0;
    for ($i = 0; $i < count($n_array); $i++)
    {
        $total += $n_array[$i] ** ($p+$i);
    }
    $k = $total / $n ;
    return is_int($k) ? $k : -1;
}

echo digPow(12345, 2);
