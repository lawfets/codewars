<?php
function count_smileys($arr) {
   

  /*  first divide strings in array into arrays of characters. 
    then use the pattern to remove illegal characters.
    Then check the count of the inner arrays, if they are not 3, unset them.
    then implode the inner arrays to strings and check if the strings are correct this time. */
  for($i = count($arr) - 1; $i >= 0; $i--) // count will have one number more than the element number because array starts at 0
  {
    if (isset($arr[$i]) &&  preg_match($pattern, $arr[$i]))
    { 
        unset($arr[$i]);
    }

  } 
  print_r ($arr);
  echo '<br>';
 
}
// count_smileys(['$)', '-$', ';-)']);
count_smileys([':D',':~)',';~D',':)']);
count_smileys([':)',':(',':D',':O',':;']);
count_smileys([';]', ':[', ';*', ':$', ';-D']);