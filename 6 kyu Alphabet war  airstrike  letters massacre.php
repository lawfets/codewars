<DOCTYPE html!>
<html>
    <head></head>
    <body>
        <?php
           $str1 = "s*zz";
           $str2 = "*zd*qm*wp*bs*";
           $str3 = "****";
           $str4 = "**s";

function alphabetWar(string $fight): string {
 
    $left = 0;
    $right = 0;

    $arr = str_split($fight);

    $arr_count = count($arr);

    for ($i = 0; $i < $arr_count; $i++)
    {
        if (isset($arr[$i]) && $arr[$i] == '*' ) 
        {
            if (isset($arr[$i - 1]) && $arr[$i - 1] != '*')
            {   
                echo $arr[$i - 1] . "1<br>";
                unset ($arr[$i - 1]);
                
            }
            if (isset($arr[$i + 1]) && $arr[$i + 1] != '*')
            {
                echo $arr[$i + 1] . "2<br>";
                unset ($arr[$i + 1]);
                
            }
            if (isset($arr[$i]) && $arr[$i] === '*')
           {
            echo $arr[$i] . "3<br>";
            unset ($arr[$i]);
            
           }

        }
    }
    print_r ($arr);
    $arr2 = array_values($arr);
    for ($j = 0; $j < count($arr2); $j++)
    {
        switch ($arr2[$j]) 
        {
            case "w":
                $left += 4;
                break;
            case "p":
                $left += 3;
                break;
            case "b":
                $left += 2;
                break;
            case "s":
                $left += 1;
                break;
        }
        
        switch ($arr2[$j]) 
        {
            case "m":
                $right += 4;
                break;
            case "q":
                $right += 3;
                break;
            case "d":
                $right += 2;
                break;
            case "z":
                $right += 1;
                break;
        }

    }
    if ($left == $right){
        return "Let's fight again!";
    } else {
         
        return $left > $right ? "Left side wins!" : "Right side wins!";
    } 
    



}

//echo alphabetWar($str1) . "<br>";
//echo alphabetWar($str2) . "<br>";
//echo alphabetWar($str3) . "<br>";
echo alphabetWar($str4) . "<br>";
        ?>
    </body>


</html>

