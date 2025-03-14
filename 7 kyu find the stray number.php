<?php //7 kyu find the stray number.php

function stray($arr)
{
    array_sort($arr);
    return $arr[0] === $arr[1] ? $arr[count($arr) - 1] : $arr[0];
}
function strai(array $arr) {
    return array_search(1, array_count_values($arr));
  }
// array_count_values() returns an array where the values have become the keys and the amount of times the value exists in the original array becomes the value.
// array_search(1, ) searches for 1 as a value in the array returned by array_count_values()