<?php
//print_r($_POST["inputs"]);
//test to see if values are being stored in the array
	$m=1;
	$arrA=array();
	$arrB=array();
	$arrC=array();
	$arrD=array();
	$arrE=array();
	$arrF=array();
	$arrG=array();
	$arrH=array();
	$arrI=array();
for($i=0;$i<9;$i++){//row number
	for($j=0;$j<9;$j++){//col number
			if($i<3){
				if($j<3){
					if($_POST['inputs'][$i][$j]!=NULL){
						$arrA[]=$_POST['inputs'][$i][$j];
					}
				}
				else if($j<6){
					if($_POST['inputs'][$i][$j]!=NULL){
						$arrB[]=$_POST['inputs'][$i][$j];
					}
				}
				else{
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrC[]=$_POST['inputs'][$i][$j];
					}
				}
			}
			else if($i<6){
				if($j<3){
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrD[]=$_POST['inputs'][$i][$j];
					}
				}
				else if($j<6){
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrE[]=$_POST['inputs'][$i][$j];
					}
				}
				else{
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrF[]=$_POST['inputs'][$i][$j];
					}
				}
			}
			else{
				if($j<3){
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrG=$_POST['inputs'][$i][$j];
					}
				}
				else if($j<6){
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrH=$_POST['inputs'][$i][$j];
					}
				}
				else{
					if($_POST['inputs'][$i][$j]!=NULL){
					$arrI=$_POST['inputs'][$i][$j];
					}
				}
			}
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
	}
		
	
}


function checkBlock($arrX){
	$m=1;
	$arrLen=count($arrX);
	for($i=0;$i<$arrLen-$m;$i++){
		$tempOne=$arrX[$i];
		for($j=$i+$m;$j<$arrLen;$i++){
			$tempTwo=$arrX[$j];
			if($tempOne==$tempTwo){
				return true;
			}
		}
	}
	return false;
}

function checkLine($arrX){
	$m=1;
	$arrLen=count($arrX);
	for($i=0;$i<$arrLen-$m;$i++){
		$tempOne=$arrX[$i];
		for($j=$i+$m;$j<$arrLen;$i++){
			$tempTwo=$arrX[$j];
			if($tempOne==$tempTwo){
				return true;
			}
		}
	}
	return false;
}



if(checkBlock($arrA)){
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
	

if(checkBlock($arrB)){
	for($g=0;$g<3;$g++){
		for($h=3;$h<6;$h++){//shades block B
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	


if(checkBlock($arrC)){
	for($g=0;$g<3;$g++){
		for($h=6;$h<9;$h++){//shades block C
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrD)){
	for($g=3;$g<6;$g++){
		for($h=0;$h<3;$h++){//shades block D
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrE)){
	for($g=3;$g<6;$g++){
		for($h=3;$h<6;$h++){//shades block E
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrF)){
	for($g=3;$g<6;$g++){
		for($h=6;$h<9;$h++){//shades block F
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrG)){
	for($g=6;$g<9;$g++){
		for($h=0;$h<3;$h++){//shades block G
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrH)){
	for($g=6;$g<9;$g++){
		for($h=3;$h<7;$h++){//shades block H
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

if(checkBlock($arrI)){
	for($g=6;$g<9;$g++){
		for($h=6;$h<9;$h++){//shades block I
			echo '<style>
			#row_'.$g.' .col_'.$h.'{
			background-color: red;
			}
			</style>';
		}
	}
}	

else{
	
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
