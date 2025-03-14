<?php // 6 kyu Counting Duplicates.php

function duplicateCount($text) {
    $text = strtolower($text);
    $array = str_split($text);  
    $value_array = array_count_values($array);
    $amount = 0;
    foreach($value_array as $char => $digit)
    {
        if ($digit > 1)
        {
        $amount += 1;
        }
    }
    return $amount; 
}
echo duplicateCount("");
echo '<br>';
echo duplicateCount("abcde");
echo '<br>';
echo duplicateCount("aabbcde");
echo '<br>';
echo duplicateCount("aabBcde");
echo '<br>';
echo duplicateCount("Indivisibility");
echo '<br>';
echo duplicateCount("Indivisibilities");