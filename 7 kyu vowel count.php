<?php
  
function getCount(string $str) {
  $pattern = "/[aeiou]+/";
  $i = 0;
  $match = [];
  preg_match_all($pattern, $str, $match);
  $str = implode('', $match[0]);
  return strlen($str);
  
}
getCount("aeiou", 5);
echo "<br>";
getCount("y", 0);
echo "<br>";
