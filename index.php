<?php
/*

 */

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
	<Form action="welcome.php" method="post">
	<select name="title">
	<option value="mister">Mr.</option>
	<option value="miss">Ms.</option>
	<option value="misses">Mrs.</option>
	<option value="doctor">Dr.</option>
	<option value="professor">Prof.</option>
	</select>
	First name:<input type="text" name="first_name"><br>
	Family name:<input type="text" name="family_name"><br>
	Address:<input type="text" name="address"><br>
	Year of Birth:<input type = "number" name="yob"><br>
	<input type="submit" value="Submit">
	
	
	</Form>
	
</body>

</html>
