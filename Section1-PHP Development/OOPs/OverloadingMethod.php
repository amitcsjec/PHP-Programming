<!DOCTYPE html>
	<head>
		<title>__isset() method Demo</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating a Class with __isset()</h1>
	<?php
	
	class MyClass {
		public function __isset( $propertyName ) {
			// All properties beginning with "test" are "set"
			return ( substr( $propertyName, 0, 4 ) == "test" ) ? true : false;
		}
	}
	
	$testObject = new MyClass;
	echo isset( $testObject->banana ) . "<br />";  // Displays "" (false)
	echo isset( $testObject->testBanana ) . "<br />";  // Displays "1" (true)
	
	?>
	
	</body>
</html>