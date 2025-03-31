<?php
function noBoringZeros(int $n) {

  if ($n === 0 || $n % 10 !== 0)
  {
    return $n;
  }
  else
  {
    return noBoringZeros($n/10);
  }
}

echo noBoringZeros(0);