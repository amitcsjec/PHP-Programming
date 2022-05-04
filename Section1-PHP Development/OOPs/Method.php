<!DOCTYPE html>
	<head>
		<title>Defining and Using Object properties</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
	<?php
	
	class MyClass {
		public function hello() {
		echo "Hello, World!";
		}
	}
	$obj = new MyClass;
	$obj-> hello(); // Displays “Hello, World!”
	
	?>
	</body> 
</html>