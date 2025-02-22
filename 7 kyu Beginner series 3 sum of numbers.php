<?php
    function getSum(int $a, int $b)
    {
        $array = range($a, $b);

        $total = 0;

        foreach($array as $d)
        {
            $total +=$d;
        }

        return $total;
    }
