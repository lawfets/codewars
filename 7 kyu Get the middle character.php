<?php

function getMiddle($text) 
{
  return strlen($text) % 2 === 0 ? substr($text, strlen($text)/2 - 1, 2) : substr($text, strlen($text)/2 - 0.5, 1);
}

echo getMiddle('abc');
echo "<br>";
echo getMiddle('abcd');
echo "<br>";
echo getMiddle('abcde');

