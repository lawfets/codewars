<?php // 7 kyu isograms.php
function isIsogram($string) {
    $string = strtolower($string);
    $array = str_split($string);
    $value_array = array_count_values($array);
    
     foreach($value_array as $value => $digit)
    {
      if ($digit > 1)
      {
        return false;
      }
    }
    return true;
}

echo isIsogram("Dermatoglyphics"). "<br>";
echo isIsogram("isogram"). "<br>";
echo isIsogram("aba"). "<br>";
echo isIsogram("moOse"). "<br>";
echo isIsogram("isIsogram"). "<br>";
echo isIsogram(""). "<br><br>";