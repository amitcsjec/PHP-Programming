<!DOCTYPE html>
	<head>
		<title>__unset() method Demo</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating a Class with __unset()</h1>
	<?php
	
	class MyClass {
		public function __unset( $propertyName ) {
			// All properties beginning with "test" are "set"
			echo "Unsetting property '$propertyName'<br />";
		}
	}
	
	$testObject = new MyClass;
	unset( $testObject->banana );  // Displays "Unsetting property 'banana'"
	
	?>
	
	</body>
</html>