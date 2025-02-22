<?php

function countPositivesSumNegatives($input) {
  if ($input === null || $input === [])
  {
    return [];
  }
  else {
    $plus_count = 0;
    $min_sum = 0;
    for ($i = 0; $i < count($input); $i++)
    {
      if ($input[$i] > 0)
      {
        $plus_count++ ;
      } else if ($input[$i] < 0)
      {
        $min_sum += $input[$i];
      } else {
        $min_sum = $min_sum;
      }
    }
    return [$plus_count, $min_sum];
  }
}

countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]);
countPositivesSumNegatives([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]);

?>