<?php 
    function digitSum($a, $b) {
        $n = pow(10, $b - 1);

  $sum = 0;
  while ($n >= 1) {
    $sum = $sum + $a * $n;
    $n = $n / 10;
  }

  return $sum;
    }
    
      function checkConcatenatedSum($n, $concLength) {
        $count = $concLength > 0 ? $concLength : 1;

        $targetSum = 0;
        $tempN = $n;
              
        while($tempN > 1) {
          $targetSum = $targetSum + digitSum($tempN % 10, $count);
          $tempN = $tempN / 10;
        }
      
        return $targetSum == $n ? 1 : 0;
      }


// Test cases
echo "1 Result: " . checkConcatenatedSum(198, 2) . "<br />"; // 1
echo "2 Result: " . checkConcatenatedSum(198, 3) . "<br />"; // 0
echo "3 Result: " . checkConcatenatedSum(2997, 3) . "<br />"; // 1
echo "4 Result: " . checkConcatenatedSum(2997, 2) . "<br />"; // 0
echo "5 Result: " . checkConcatenatedSum(13332, 4) . "<br />"; // 1
echo "6 Result: " . checkConcatenatedSum(9, 1) . "<br />"; // 1
echo "7 Result: " . checkConcatenatedSum(5, 0) . "<br />"; //1

?>