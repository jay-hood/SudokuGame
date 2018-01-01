<?php


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
	<?php
        $title = $_POST['title'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['family_name'];
        $address = $_POST['address'];
        $yob = $_POST['yob'];
        $currYear = 2017;
        $age = $currYear-$yob;
        print '<p>Hello, ' . "$title $first_name $last_name" . ' of ' . "$address</p>";
        print '<p>You will be ' . "$age" . ' this year. </p>';
        ?>
</body>

</html>
