<?php
function factorial(int $n): int {
    if($n > 12 || $n < 0)
    {
        throw new RangeException("Out of range");
    }
    elseif($n === 0)
    {
        return 1;
    }
    else{
        return $n * factorial($n - 1);
    }
}

echo factorial(5)."<br>";
echo factorial(4)."<br>";
echo factorial(12)."<br>";
echo factorial(0)."<br>";
echo factorial(13);