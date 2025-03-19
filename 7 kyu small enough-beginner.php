
<?php
function smallEnough(array $a, int $limit): bool {
    return array_filter($a, fn($num) => $num > $limit) ? false: true;
}

/*
function smallEnough(array $a, int $limit): bool {
  foreach($a as $index => $value)
  {
    if ($a[$index] > $limit)
    {
      return false;
    }
  }
  return true;
}
*/