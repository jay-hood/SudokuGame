<?php
//print_r($_POST["inputs"]); 
//test to see if values are being stored in the array
?>

<html>
<head>
	<title>Sudoku</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>
	
	<?php
		echo "<form method='post' target=''>";
		echo "<table>";
		for($i=0;$i<9;$i++){
			echo "<tr>";
				for($j=0;$j<9;$j++){
					echo '<td><input type="number" id="$i_$j" name="inputs['.$i.']['.$j.']" value="" min="1" max="9"></td>';
					if(isset($_POST["inputs"][$i][$j])){
                        print_r($_POST["inputs"][$i][$j]);
                    }
			echo "</tr>";
		}
		echo "</table>";
		
	?>	
	<input type="submit" name="submit" value="Submit">
	</form>

	
</body>

</html>
