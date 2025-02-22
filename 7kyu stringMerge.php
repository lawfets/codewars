<?php
function stringMerge($string1, $string2, $letter) {
    $arr1 = preg_split("/$letter/", $string1, 2);
    $arr2 = preg_split("/$letter/", $string2, 2);

    $newWorld = $arr1[0] . $letter . $arr2[1];





/*    $arr = explode("$letter", $string1); // we need first element of this array
    $arr2 = explode($letter, $string2, 2); // we need second element of this array of 2 elements
  
    $newWord = $arr[0].$letter.$arr2[1]; // explode removes $letter from both the substrings so we have to add it in between.
*/
    return $newWord; 
}
stringMerge("hello", "world", "l");
stringMerge("coding", "anywhere", "n");
stringMerge("person", "here", "e");

?>