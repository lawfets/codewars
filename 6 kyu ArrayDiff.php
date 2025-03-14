<?php
function arrayDiff($a, $b) {
    for($i = count($a)-1; $i >= 0; $i--)
    { 
      for($j = 0; $j < count($b); $j++)
      {
      
        if ($a[$i] === $b[$j])
        {
          unset($a[$i]);
          break;
/*  once the element $a[$i] is unset (removed), you cannot have
    other elements of $b trying to compare to the same $a[$i], therefore a break */         
        }
      }
    }
    $a = array_values($a); // array_values must be reassigned to variable not the same as sort
    print_r($a);

    return $a;
  }
   arrayDiff([1,2], [1]);
   arrayDiff([1,2,2], [1]);
   arrayDiff([1,2,2], [2]);
   arrayDiff([1,2,2], []);
   arrayDiff([], [1,2]);
   arrayDiff([1, 2, 3], [1,2]);