<?php

function scale($s, $k, $n) {
    $arr = [];
    $res_arr = [];
    $comb_arr = [];
    $multi_arr = [];
    $ncomb_arr = [];
    $arr = explode("\n", $s); // double quotes necessary to work
    foreach($arr as $stringToSplit)
    {
        $res_arr = array_map(fn($char) => str_repeat($char, $k), str_split($stringToSplit));
        $res_str = implode('', $res_arr);
        array_push($comb_arr, $res_str);
    }
    foreach($comb_arr as &$comb_word)
    {
        $comb_word = $comb_word. "\n"; // single quotes necessary to work
    }

    $multi_arr = array_map(fn($word) => str_repeat($word, $n), $comb_arr);
    $multi_str = implode('', $multi_arr);
    
    if($s === "")
    {
        return '';
    }
    return substr($multi_str, 0, -1);
   

}

$a = "abcd\nefgh\nijkl\nmnop";
echo scale($a, 2, 3);
echo "<br>";
echo scale('', 2, 3);