<?php
function twoSort(array $arr): string  {
    // sort automatically sorts according to ASCII code
    sort($arr);
    // str_split to put each letter as an element of a new array
    // then implode adding the *** between each letter.
   return implode('***', str_split($arr[0]));
  }

echo (twoSort( ["bitcoin", "take", "over", "the", "world", "maybe", "who", "knows", "perhaps"]));