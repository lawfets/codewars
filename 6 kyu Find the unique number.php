<?php

function find_uniq($a)
{
    if ($a[0] === $a[1] || $a[0] === $a[2]){
        foreach($a as $b)
        {
            if ($a[0] === $b)
            {
                continue;
            }
            else 
            {
                return $b;
            }
        }
    }
    elseif ($a[1] === $a[2])
    {
        foreach($a as $b)
        {
            if ($a[1] === $b)
            {
                continue;
            }
            else
            {
                return $b;
            }
        }
    }  
}
  

  echo find_uniq([1,1,1,0.5,1]);

 /* function find_uniq($a) {
    sort($a);
    
    return ($a[0] === $a[1]) ? end($a) : current($a);
  }  best practice */