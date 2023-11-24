<?php  
for ($y = 1970; $y <= 2023; $y++) {
    if ((0 == $y % 4) && (0 != $y % 100)) {
        echo "$y is a Leap year.<br>";
    } else {
        echo "$y is not a Leap year.<br>";
    }
}
?> 
