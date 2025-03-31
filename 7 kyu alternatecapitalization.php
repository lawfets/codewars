<?php
function capitalize($s) {
  $array = str_split($s);
  $array1 = str_split(strtoupper($s));
  
  for($i = 0; $i < count($array);$i++)
  {
    if ($i % 2 === 0)
    {
        $array[$i] = strtoupper($array[$i]);
        $array1[$i] = strtolower($array1[$i]);
    }
  }
  $s = implode($array);
  $S = implode($array1);
  $array2 = [$s, $S];
  return $array2; 
}

print_r(capitalize("abcde"));