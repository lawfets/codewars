<?php

function printerError($s) {
  $slength = strlen($s);
  $letters = range('a', 'm');
  $error = 0;
  $s_array = str_split($s);
  
  for ($i = 0; $i < count($s_array); $i++)
  {
    if (!in_array($s_array[$i], $letters))
    {
      $error += 1;
    }
  }
  echo $error . "/" . $slength . "<br>";
  
}

function printerError1($s) {
    echo strlen(preg_replace('/[a-m]/i', '', $s)) . '/' . strlen($s);
}


printerError1("aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz");
printerError1("kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz");
printerError1("kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu");

?>