<?php // 6 kyu highest scoring word.php
function high($x) 
{
    $x_array = explode(' ', $x);
    $new_array = [];
    $alphabet = [];
    $array = [];
    for ($i = 0; $i < 26; $i++)
{
    $alphabet[chr(97 + $i)] = $i + 1;
}
    for ($i = 0; $i < count($x_array); $i++)
    {
        $new_array[$i] = str_split($x_array[$i]);
        $total = 0;
        for($j = 0; $j < count($new_array[$i]); $j++)
        {
            if (array_key_exists($new_array[$i][$j], $alphabet)){
                $total += $alphabet[$new_array[$i][$j]];
            }
        }
        $x_array[$i] = [$total,$x_array[$i]];
        array_push($array, $x_array[$i]);
    }
    
    usort($array, function($a, $b)
    {
        return $b[0] <=> $a[0];
    });
    return $array[0][1];
}


high('man nam mna amn anm');
?>