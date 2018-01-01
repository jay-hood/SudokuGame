<?php
print_r($_POST["inputs"]);
//test to see if values are being stored in the array

for($i=0;$i<9;$i++){//row number
		for($j=0;$j<9;$j++){//col number
			if($_POST['inputs'][$i][$j]>0 && $_POST['inputs'][$i][$j]<10){
			$first_row=$_POST['inputs'][$i][$j];//values to compare against 
			for($k=1;$k<9;$k++){
				if($_POST['inputs'][$i][$k]>0 && $_POST['inputs'][$i][$k]<10){
					$second_row=$_POST['inputs'][$i][$k];//possible doubles
					if($first_row==$second_row) {
						echo '<style>
						#row_'.$i.'{
						background-color: red;
						}
						</style>';
					}
				}
			}
		}
		if($_POST['inputs'][$j][$i]>0 && $_POST['inputs'][$j][$i]<10){
			$first_col=$_POST['inputs'][$j][$i];
			for($k=1;$k<9;$k++){
				if($_POST['inputs'][$k][$i]>0 && $_POST['inputs'][$k][$i]<10){
					$second_col=$_POST['inputs'][$k][$i];//possible doubles
					if($first_col==$second_col) {
						echo '<style>
						.col_'.$i.'{
						background-color: red;
						}
						</style>';
					}
				}
			}
		}
		
//code for triple blocks go here (if i<3 and j<3 do stuff, then i>2 and i<6, then i>5 and i<9	
		
	}	
}//the part that doesn't work is the declaration line of the inline css, #tr_...
 //whether it's broken in here or in the body for loop is a question I can't answer right now
 //holy crap I finally got it to work!!!!!
?> 

<html>
<head>
    <title>Sudoku</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>

    <?php
    function drawTable($rows, $cols){
        echo "<form method='post' target=''>";
        echo "<table>";
        for($i=0;$i<$rows;$i++){
             echo '<tr id="row_'.$i.'">';
                for($j=0;$j<$cols;$j++){
				echo sprintf('<td class="col_'.$j.'"><input type="number" id="%s_%s" name="%s" value="%s" min="1" max="9"></td>',
					$i,
					$j,
					"inputs[{$i}][{$j}]",
					$_POST['inputs'][$i][$j] ?: '' // Shorthand described above
					);            
			}
            echo "</tr>";
        }
        echo "</table>";
        echo "";

    }
    drawTable(9,9);
    ?>  
    <input type="submit" name="submit" value="Submit">
</form> 

</body>

</html>
