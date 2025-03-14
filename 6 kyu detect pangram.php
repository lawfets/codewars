<?php
function detect_pangram($string) { 
    $test = array_combine(range("a","z"), range(0,25));
    $string = strtolower($string);
    $short_string = preg_replace("/[^a-z]/", "", $string);
    $str_array = str_split($short_string);
    
    foreach($test as $alphabet => $value)
    {
        $test[$alphabet] = 0;
    }
    foreach($test as $alphabet => $value)
    {
        foreach($str_array as $number => $letter)
        {
            if( $str_array[$number] === $alphabet)
            {
                $test[$alphabet] += 1;
            }
        }
    }
    foreach($test as $alphabet => $value)
    {
        if($test[$alphabet] < 1)
        {
            return false;
        }
    }
    return true;
    
   
}

detect_pangram("The quick brown fox jumps over the lazy dog.");
detect_pangram("1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B");
detect_pangram("A pangram is a sentence that contains every single letter of the alphabet at least once.");