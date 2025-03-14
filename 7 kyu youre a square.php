<?php // 7 kyu youre a square.php

function isSquare($n){
  if($n < 0)
  {
    return false;
  }
  else
  {
    return sqrt($n) === floor(sqrt($n)) ? true : false;
  }
  }
function is_Square($v)
{
  echo sqrt($v) === floor(sqrt($v)) ? "true" : "false" ; // doesn't give an error for negative numbers because sqrt result of negative number is NAN
    // NAN === NAN always evaluates to false because NAN is never equal to itself. 
}
  is_Square(0);
  echo '<br>';
  is_Square(3);
  echo '<br>';
  is_Square(4);
  echo '<br>';
  is_Square(25);
  echo '<br>';
  is_Square(26);
  echo '<br>';
  is_Square(-26);
