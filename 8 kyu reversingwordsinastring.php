<?php
function reverse($string) {
    // I could put it on one line I suppose but I 'd rather be able to read it.
    // explode puts the words in an array while simultaneously removing spaces.
    $array = explode(' ', $string);
    // reversing the order of the words in the array as asked in the puzzle.
    $array = array_reverse($array);
    // going back to a string while implementing a space between every word without adding in front or behind.
    $string = implode(' ', $array);
    return $string;
}

reverse("Hello World");