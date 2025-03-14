<?php // Y kyu reverse words.php
function reverseWords($str) {
$str_array = explode(' ', $str);
foreach($str_array as $index => $word)
  {
  $str_array[$index] = strrev($word);
  }

  return implode(' ', $str_array);


}
