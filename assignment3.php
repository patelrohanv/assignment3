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
	echo "<h1>here1</h1><br>";
	$c = new ChildClass();
	echo "<h1>here2</h1><br>";
	echo $c->setNum(10);
	echo "<h1>here3</h1><br>";
	echo "$c->$num";
	echo "<h1>here4</h1><br>";
	$c.countdown();

?>
</body>
</html>