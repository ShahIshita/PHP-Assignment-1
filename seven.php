<?php  
//echo
echo "Hii Helloo!!" ."<br>";

//global
$a = 1;
$b = 2;
function Sum()
{
    global $a, $b;
    $b = $a + $b;
} 
Sum();
echo $b ."<br>";

// class and var
class MyClass {
    var $firstName = "Ishita";
  }
  
  $obj = new MyClass();
  echo $obj->firstName ."<br>";

// const
const VALUE = 50;
echo VALUE ."<br>";

//print
print "Good";
print " Morning"."<br>";

//array
$chocolate = array("KitKat","Dairy Milk","Gems");
print_r($chocolate);
echo "<br>";

//foreach
$chocolate = ["KitKat","Dairy Milk","Gems"];
foreach($chocolate as $chocolates) {
  echo "$chocolates <br>";
}
//for 
for ($i = 1; $i <= 10; $i++) {
    echo $i ."<br>";
}

//if else nd elseif
if (5 > 10) {
    echo "5 is bigger than 10";
} elseif ($a == $b) {
    echo "5 is equal to 10";
} else {
    echo "5 is smaller than 10" ."<br>";
}

//case
$a = 2;
switch($a) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
}

?>