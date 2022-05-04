<!DOCTYPE html>
	<head>
		<title>Determining an Object's Class</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Determining an Object's Class</h1>
	<?php
	
	class MyClass {
	}
	
	$obj = new MyClass();
	echo get_class( $obj );  // Displays MyClass
	
	?>
	
	</body>
</html>