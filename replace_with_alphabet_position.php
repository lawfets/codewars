<?php // replace_with_alphabet_position.php
function alphabet_position(string $s) {
    $s_array = [];
    $pattern = '/[\P{L}]/';  // tests for anything that is not a letter.
    $letters = range('a', 'z');
    $numbers = range(1, 26);
    $letterCount = array_combine($letters, $numbers);
    $s_array = str_split($s);
    for ($i = count($s_array) - 1; $i >=0; $i--)
    {

        $s_array[$i] =strtolower($s_array[$i]);
        if (preg_match($pattern, $s_array[$i]))
        {
            unset($s_array[$i]);
        }
    }
    $s_array = array_values($s_array);
    for ($j = 0; $j <count($s_array); $j++)
    {
        if (isset($s_array[$j]) && array_key_exists($s_array[$j], $letterCount))
        {
        $s_array[$j] = $letterCount[$s_array[$j]];
        }
    }    
    $s = implode(' ', $s_array);
    return $s;
}
alphabet_position('abc');
alphabet_position('The sunset sets at twelve o\' clock.');
alphabet_position('The narwhal bacons at midnight.');