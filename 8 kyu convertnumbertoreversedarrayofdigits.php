<?php
  
function digitize(int $n): array{
  // turn integer to array
$arr = str_split($n);
  //turn elements of arr back to integers
$arr = array_map(function ($a)
{
    return (int)$a;
}, $arr);
   // reverse array order
  return array_reverse($arr);
}

print_r(digitize(123));