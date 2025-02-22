<?php
    function disemvowel(string $s)  {
        $array = str_split($s);
        for($i = 0; $i < count($array); $i++)
        {
           switch ($array[$i])
           {
            case 'a':
                $array[$i] = '';
                break;
            case 'e':
                $array[$i] = '';
                break;
            case 'i':
                $array[$i] = '';
                break;
            case 'o':
                $array[$i] = '';
                break;
            case 'u':
                $array[$i] = '';
                break;
           }
        }

        $s = implode($array);

        return $s;
    
    }


      disemvowel("dada");
?>