<?php

$x = 5;     // global scope
$y = 10;

function variableScope() {
   $a = 20; // local scope
   global $x, $y;  // global keyword
  $y = $x + $y;
  
    echo "<p>Local scope: $a</p>";
  } 
  variableScope();
  
  echo "<p>Local scope : $a</p>";
  echo "<p>Global scope : $x</p>";
  echo "<p>Global keyword: $y</p>";
?>
