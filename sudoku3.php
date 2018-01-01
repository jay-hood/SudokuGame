<?php
//print_r($_POST["inputs"]);
//test to see if values are being stored in the array

for($i=0;$i<9;$i++){//row number
	$m=1;
		for($j=0;$j<8;$j++){//col number
			if($_POST['inputs'][$i][$j]>0 && $_POST['inputs'][$i][$j]<10){
			$first_row=$_POST['inputs'][$i][$j];//values to compare against 
			for($k=$j+$m;$k<9;$k++){
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
		//There seems to be a problem where individual cells are evaluated twice, always violating check conditions.
		//I think k always has to be set to j+1;
		if($_POST['inputs'][$j][$i]>0 && $_POST['inputs'][$j][$i]<10){
			$first_col=$_POST['inputs'][$j][$i];
			for($k=$j+$m;$k<9;$k++){
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
		if($_POST['inputs'][$i][$j]>0 && $_POST['inputs'][$i][$j]<10){//this highlights violating 3x3 top left corner in red
			$block_start=$_POST['inputs'][$i][$j];
			for($k=0;$k<3;$k++){
				$block_compare=$_POST['inputs'][$j][$k];
				if($block_start==$block_compare){
					for($g=0;$g<3;$g++){
							for($h=0;$h<3;$h++){//shades block A
									echo '<style>
									#row_'.$g.' .col_'.$h.'{
									background-color: red;
									}
									</style>';
								}
					}
				}
			}
		}	
		if($_POST['inputs'][$i][$j]>0 && $_POST['inputs'][$i][$j]<10){//this highlights violating 3x3 top mid corner in red
			$block_start=$_POST['inputs'][$i][$j];//probably just a better idea to make a new array for each 3x3 block and check them independently, or 
												  //call a method that checks them based on specific parameters or input values
												  //and return a boolean true if it violates the check.
												  //It's probably easier to do that in java and then just modify it for php.
			for($k=3;$k<6;$k++){
				$block_compare=$_POST['inputs'][$j][$k];
				if($block_start==$block_compare){
					for($g=0;$g<3;$g++){//rows 0, 1, 2
							for($h=3;$h<6;$h++){//shades block B (columns 3,4,5)	
									echo '<style>
									#row_'.$g.' .col_'.$h.'{
									background-color: red;
									}
									</style>';
								}
					}
				}
			}
		}
		if($_POST['inputs'][$i][$j]>0 && $_POST['inputs'][$i][$j]<10){//this highlights violating 3x3 top right corner in red
			$block_start=$_POST['inputs'][$i][$j];
			for($k=6;$k<9;$k++){//C block goes full red if center block is shaded. PROBLEM! Probably same issue as row/column double-check problem.
				$block_compare=$_POST['inputs'][$j][$k];
				if($block_start==$block_compare){
					for($g=0;$g<3;$g++){//rows 0, 1, 2
							for($h=6;$h<9;$h++){//shades block B (columns 6,7,8)	
									echo '<style>
									#row_'.$g.' .col_'.$h.'{
									background-color: red;
									}
									</style>';
								}
					}
				}
			}
		}
	}
}

?> 

<html>
<head>
    <title>Sudoku</title>
    <link rel="stylesheet" href="main3.css" type="text/css">
</head>

<body>

    <?php
    function drawTable($rows, $cols){
        echo "<form method='post' target=''>";
        echo "<table>";
        for($i=0;$i<$rows;$i++){
             echo '<tr class="tr_border" id="row_'.$i.'">';
                for($j=0;$j<$cols;$j++){
				echo sprintf('<td class="col_'.$j.'"><input type="number" id="%s_%s" name="%s" value="%s" min="1" max="9"></td>',
					$i,
					$j,
					"inputs[{$i}][{$j}]",
					$_POST['inputs'][$i][$j] ?: ''
					);            
			}
            echo "</tr>";
        }
        echo "</table>";
        echo "";

    }
    drawTable(9,9);
    ?>  
    <input type="submit" name="submit" value="" id="check_btn">
</form> 

</body>

</html>
