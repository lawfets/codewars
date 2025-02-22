<?php
function accum($s) {
  $s = strtolower($s);
  $s_array = str_split($s);
  for ($i = 0; $i < count($s_array); $i++)
  {
    $s_array[$i] = str_repeat($s_array[$i], $i + 1);
  }
  for ($j = 0; $j < count($s_array); $j++)
  {
    $s_array[$j] = ucfirst($s_array[$j]);
  }
  $s = implode('-', $s_array);
  return $s;
}
?>