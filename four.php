<?php   
$a = 5;
$b = 10; 

//Arithmetic
echo "Arithmetic .<br>";
echo $sum = $a + $b ."<br>";
echo $sub = $a - $b ."<br>";
echo $mul = $a * $b ."<br>";
echo $div = $a / $b ."<br>";
echo $mod = $a % $b ."<br>";
echo "<br>";

//Assignment
echo "Assignment .<br>";
echo $exp = $a ."<br>";
echo $add = $a += 20 ;
echo "<br>";
echo "<br>";

//Conditional assignment
$age = 20;
echo ($age >= 18) ? "Adult" : "Not Adult" ;
echo "<br>";
echo "<br>";

//comparison
echo "Comparison .<br>";
$x = 10;
$y = "10";
echo var_dump ($x == $y) ."<br>";
echo var_dump ($x === $y) ."<br>";
echo var_dump ($x != $y) ."<br>";
echo var_dump ($x !== $y) ."<br>";
echo var_dump ($x <> $y) ."<br>";
echo var_dump ($x > $y) ."<br>";
echo var_dump ($x < $y) ."<br>";
$x = 10;
$y = 30;
echo var_dump ($x < $y) ."<br>";
echo var_dump ($x > $y) ."<br>";
$x = 20;
$y = 20;
echo var_dump ($x <= $y) ."<br>";
echo var_dump ($x >= $y) ."<br>";
echo "<br>";

//logical
echo "logical .<br>";
$a = true;
$b = false;

echo var_dump ($result = $a && $b) ."<br>"; 
echo var_dump ($result = $a || $b) ."<br>"; 
echo var_dump ($result = $a != false) ."<br>"; 
echo "<br>";

//increment decrement 
echo "increment .<br>";
$x = 100;  
echo $x++ ."<br>";
echo ++$x ."<br>";

echo $x-- ."<br>";
echo --$x ."<br>";
echo "<br>";


//String
echo "String .<br>";
$fistName = "Ishita";
$lastName = "Shah";
echo $fistName . " " . $lastName;

?>