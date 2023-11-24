<?php
function higestNumber($arr) {
    $max = $secondMax = null;

    foreach ($arr as $num) {
        if ($max === null || $num > $max) {
            $secondMax = $max;
            $max = $num;
        } elseif ($secondMax === null || ($num > $secondMax && $num != $max)) {
            $secondMax = $num;
        }
    }

    return $secondMax !== null ? $secondMax : "No second highest.";
}

// Example usage:
$array = [100, 50, 150, 250, 200,300];
$ans = higestNumber($array);

echo "Second highest number: " . $ans;

































