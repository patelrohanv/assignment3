<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
<?php 
	//echo "<h1> Countdown from 10 <h1><br>";
	echo "<h1>Constructing ChildClass</h1><br>";
	$c = new ChildClass(10);
	echo "<h1>Starting Countdown</h1><br>";
	echo $c->countdown();

?>
</body>
</html>