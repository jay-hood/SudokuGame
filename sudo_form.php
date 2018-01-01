<?php
print_r($_POST["inputs"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	if($_POST['inputs'][0][8]==1) {//this works
	print "Cell 0,8 is 111";
}
	for($i=0;$i<9;$i++){//row number
		for($j=0;$j<9;$j++){//col number
			$first=$_POST['inputs'][$i][$j];//values to compare against
			for($k=1;$k<9;$k++){
				$second=$_POST['inputs'][$i][$k];//possible doubles
				if($first==$second) {
					echo '<style>
					tr_"'.$i.'" {
					background-color: red;
					}
					</style>';
			}
		}
	}
 }
</body>

</html>
