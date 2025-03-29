<?php
function sumDigits(int $number): int{
  //if - turn absolute, turn string, split the string into array
  $arr = str_split((string)abs($number));
  // return the sum of each digit in the array (only integer values given)
  return array_sum($arr);
}

echo sumDigits(10);