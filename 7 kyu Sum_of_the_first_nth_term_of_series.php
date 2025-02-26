<?php // Sum_of_the_first_nth_term_of_series.php

function series_sum(int $n): string {
 
  $total = 0;
  if ($n === 0)
  {
  return sprintf("%.2f", $n);
  } else 
  {
    for($n; $n > 0; $n--)
    {
      $total += 1/(1 +( 3 * ($n-1)));
    }
  } 
  return sprintf("%.2f" ,$total);

}

  echo series_sum(1);
  echo "<br>";
  echo series_sum(2);
  echo "<br>";
  echo series_sum(3);
  echo "<br>";
/*  series_sum(4);
  echo "<br>";
  series_sum(5); */