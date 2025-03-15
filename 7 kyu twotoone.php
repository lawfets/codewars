<?php
function longest($a, $b) {
    $string = $a.$b;
    $count = array_count_values(str_split($string));
    $array = [];
    $array = array_keys($count);
    sort($array);
    return implode('', $array);
}
longest("aretheyhere", "yestheyarehere");