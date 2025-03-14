<?php // 6 kyu write number in expanded form.php
function expanded_form(int $n){
    $outcome = '';
    $string = strrev((string)$n); // Reverse the number string

    for ($i = strlen($string) - 1; $i >= 0; $i--) {    
        if ($string[$i] !== "0") { 
            $outcome .= $string[$i] . str_repeat("0", $i); // Append the digit and zeros
            $outcome .= " + "; // Add separator
        }
    }

    // Correctly remove the last " + " if present
    if (substr($outcome, -3) === " + ") {
        $outcome = substr($outcome, 0, -3);
    }

   return $outcome;





    /*   $outcome = '';
    $string = strrev((string)$n);
    for($i = strlen($string) - 1; $i >= 0; $i--)     
    {
        if ($string[$i] !== "0") 
        {
            $outcome .= $string[$i];
            for ($j = 0; $j < $i; $j++)
            {
                $outcome .= "0";
            } 
            if ($i !== 0)
            {
                $outcome .= " + ";
            }  
        }
        
        
    }
    if (substr($outcome, -3) === " + ")
    {
        $outcome = substr($outcome, 0, -3);
    }

   echo $outcome;
*/
}

expanded_form(5124);
echo '<br>';
expanded_form(311);
echo '<br>';
expanded_form(1234);
echo '<br>';
expanded_form(70304);
echo '<br>';
expanded_form(70000);
echo '<br>';
expanded_form(7008000400009000531);
echo '<br>';

