<?php
function overTheRoad($address, $street){

  $opposite = ($street * 2) + 1 - $address;
  
  return $opposite;
  
} // question is really difficult to understand,
  // I had to check out the results from the sample tests to find the pattern