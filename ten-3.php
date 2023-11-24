<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    for ($k = $rows; $k > $i; $k--) {
        echo "&nbsp;&nbsp;";
    }

    // Print asterisks
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}
?>
