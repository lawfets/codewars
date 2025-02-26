<?php // 8 kyu total_amount_of_points.php
// had to switch to swich, pun intended because it was php7 but in 8.0 it works fine.
function points(array $games): int {
    $total = 0;
    foreach($games as $result)
    {
      $we = (int)$result[0];
      $them = (int)$result[2];
      $total += match(true){
        $we > $them => 3,
        $we < $them => 0,
        $we === $them => 1
      };
    }
    return $total;
  }
  echo points(['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']);
  echo "<br>";
  echo points(['1:1','2:2','3:3','4:4','2:2','3:3','4:4','3:3','4:4','4:4']);
  echo "<br>";
  echo points(['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']);
  echo "<br>";
  echo points(['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']);
  echo "<br>";
  echo points(['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']);