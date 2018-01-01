<html>
<head>
	<title>Sudoku</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>
	
	<?php
	$string="jhood8@student.gsu.edu";
	$username=substr($string,0,strrpos($string, '@'));
	echo "$string";
	echo '<br>';
	echo "$username";
	echo '<br>';
	$user=strstr($string, '@',true);
	echo "$user";
	echo '<br>';
	$key;
	for($i=0;$i<strlen($string);$i++)
	{
		if($string[$i]=='@')
		{
			$key=$i;
		}
	}
	$username2=substr($string, 0,$key);
	echo "$username2";
	
	?>

	
</body>

</html>

