
<?php

$chocolate = array("KitKat","Dairy Milk","Gems");


echo count($chocolate). "<br>";  // count

list($x, $y, $z) = $chocolate;
echo "My favourite chocolate is  $x, $y and $z.". "<br>";  // list


echo current($chocolate) . "<br>";  // current

echo next($chocolate) . "<br>";  // next

echo prev($chocolate) . "<br>";  // prev

echo end($chocolate) . "<br>";   // end

array_push($chocolate, "Bournville", "5 Star");  // push
print_r($chocolate). "<br>";
echo "<br>";

array_pop($chocolate);  // pop
print_r($chocolate);
echo "<br>";

array_shift($chocolate);  //shift
print_r($chocolate);
echo "<br>";

array_unshift($chocolate, 'Hershey');  //unshift
print_r($chocolate);
echo "<br>";

print_r(array_slice($chocolate,2));   // slice
echo "<br>";

print_r( array_search("Gems",$chocolate). "<br>");  // search

print_r(array_reverse($chocolate));  // reverse
?>
