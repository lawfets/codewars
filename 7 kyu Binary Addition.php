<?php

function add_binary($a, $b) {
  $c = $a + $b;
  $array = [];
  if ($c === 0){
    return '';
  } else
  {
    for($c; $c > 0; $c = floor($c / 2))
    {
      $binary = $c % 2;
      array_unshift($array, $binary);
    }
    echo implode('', $array);
    return implode('',$array);
  }
}
add_binary(17,8);

?>