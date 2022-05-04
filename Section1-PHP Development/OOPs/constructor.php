<!DOCTYPE html>
	<head>
		<title>Creating and Using a Constructor</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating and Using a Constructor</h1>
	<?php
	
	class MyClass {
		function __construct() {
			echo "Whoa! I've come into being.<br />";
		}
	}
	
	$obj = new MyClass;
	
	?>
	
	</body>
</html>