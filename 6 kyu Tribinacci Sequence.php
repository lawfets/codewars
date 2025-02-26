<?php
function tribonacci($signature, $n) {
  $total = 0;
  if ($n === 0)
  {
    $signature = [];
    return $signature;
  }
  elseif ($n === 1)
  {
    $total = $signature[0];
    $signature = [];
    array_push($signature, $total);
    return $signature;
  }
  elseif ($n === 2)
  {
    array_pop($signature);
    return $signature;
  }
  elseif ($n === 3)
  {
    return $signature;
  }
  else
  {
    for ($i = 0; $i < $n - 3; $i++)
    {
      $amount = $signature[$i] + $signature[$i + 1] + $signature[$i + 2];
      array_push($signature, $amount);
    }
    return $signature;
  }
} 
/*
function tribonacci($signature, $n) {
    if($n === 0) return [];
    
    if($n > 2){
      for($i = 3; $i < $n; $i++){
        $signature[$i] = $signature[$i-1] + $signature[$i-2] + $signature[$i-3];
      }   // if $n === 3 it just goes past the for loop and returns the array_slice
          // array_slice uses the array, offsets at 0 and makes a length of $n
    }
    
    return array_slice($signature, 0, $n);
  }
  print_r (tribonacci([1,2,3], 3)); 
  
 /////////////////////////////////////////////////////////////// 
  
 function tribonacci(array $signature, int $n): array {
  for ($i = $n - 3; $i > 0; $i--) {
    $signature[] = array_sum(array_slice($signature, -3)); 

    // $signature[] does the same as array_push does but with only one element.
    // array_sum does what it's supposte to do, it makes the sum of the elements
    // array_slice($signature, -3) takes the 3 last elements of the array and returns them as an array.
    // in this case the array_slice only returns the sub array to make the sum of the elements. it's not used otherwise.

  }
  return array_slice($signature, 0, $n);
}
  
  
  */