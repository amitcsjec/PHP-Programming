<!DOCTYPE html>
	<head>
		<title>A Simple Car Simulator</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>A Simple Car Simulator</h1>
	<?php
	
	class MyClass {
		const MYCONST = 123;
		public static $staticVar = 456;
		public function myMethod() {
		echo "MYCONST = " . MyClass::MYCONST . ", ";
		echo "\$staticVar = " . MyClass::$staticVar . " <br /> ";
		}
	}
	
	$obj = new MyClass;
	$obj-> myMethod(); // Displays "MYCONST = 123, $staticVar = 456"
	
	?>
	
	</body> 
</html>