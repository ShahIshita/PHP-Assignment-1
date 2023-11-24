<html> 
<head>
<style>
table {
  width:500px;
  border: 1px solid;
}
td {
  height:40px;
  width:20px;
}
</style>
</head>
<body> 
	<table> 
		<?php 
		$x = 0; 

		for($col = 0; $col < 8; $col++) { 
			echo "<tr>"; 
			$x = $col; 

			for($row = 0; $row < 8; $row++) { 
				if($x%2 == 0) { 
					echo "<td bgcolor=black></td>"; 
					$x++; 
				} 
				else { 
					echo "<td bgcolor=white></td>"; 
					$x++; 
				} 
			} 
			echo "</tr>"; 
		} 
		?> 
	</table> 
</body> 

</html> 
