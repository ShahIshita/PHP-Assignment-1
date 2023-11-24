<html>
<body>

<?php
include 'text.php'; // this file is not there so include will give warning and allow execution to continue

 include 'two-2.php';
echo "I Like $color.<br>";   //include

 include_once 'two-2.php';
 include_once 'two-2.php';  //file has already been included then it won't include it again

echo "My name is $name.<br>";   //include_once

 require 'two-2.php';     // require is complusory it will not allow to code to be executed
echo "MY favourite fruit is $fruit.<br>";  

 require_once 'two-2.php';     //require_once
 echo "i love $car."; 


?>

</body>
</html>
