<?php
  
function checkExam(array $array1, array $array2): int{
  $total = 0;
  for($i = 0; $i < count($array1); $i++)
  {
    // if both arrays are the same length and we only need to match the same elements
    // also, "" is not a possible value in this if statement due to the first array not having empty elements
      if($array1[$i] === $array2[$i])
      {
        // correct answer is +4
        $total += 4;
      }
      elseif($array2[$i] === "")
      {
        // continue is the same as $total = $total
          continue;
      }
      else
      {
        $total -= 1;
      } 
  }
  return $total >= 0? $total: 0;
}
echo checkExam(["b","c","b","a"], ["","a","a","c"]);
echo "<br>".checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]);
echo "<br>".checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]);