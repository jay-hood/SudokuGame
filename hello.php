<html>
<head>
	<title>Checkerboard For Loop Test</title>
	<style>
	</style>
</head>

<body>
	<?php
	function drawTable($rows, $cols){
		echo "<table style=width:300px;border-width:1px;border-color:black;border-style:solid;border-spacing:1px;>";//this works. Must be style=setting:value;style=...;
		for($i=1;$i<$rows;$i++){
			echo "<tr>";
				for($j=1;$j<$cols;$j++){
					if ($i%2==1 && $j%2==1) {
						echo "<td style=width:35px;height:35px;background-color:black;border-width:1px;border-color:black;border-style:solid;padding:1px;>"."</td>";
					}
					else if ($i%2==0 && $j%2==0) {
						echo "<td style=width:35px;height:35px;background-color:black;border-width:1px;border-color:black;border-style:solid;padding:1px;>"."</td>";
					}
					else {
						echo "<td style=width:35px;height:35px;background-color:red;border-width:1px;border-color:black;border-style:solid;padding:1px;>"."</td>";
					}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	drawTable(9,9);
	?>	
	
</body>

</html>
