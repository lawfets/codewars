<?php
    function DNA_strand(string $s): string 
    {
      $s_array = str_split($s);
      $message = [];
      for ($i = 0; $i < count($s_array); $i++)
      {
      $message[$i] = match ($s_array[$i])
        {
          "A" => "T",
          "C" => "G",
          "G" => "C",
          "T" => "A"
        };
      }
      echo implode("", $message);
      return implode("", $message);
    }

    DNA_strand("ATTGC");
?>