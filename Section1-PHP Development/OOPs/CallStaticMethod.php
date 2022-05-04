<!DOCTYPE html>
	<head>
		<title>__callStatic() method Demo</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating a Class with __callStatic()</h1>
	<?php
	
	class MyClass {
		public static function __callStatic( $methodName, $arguments ) {
			// All properties beginning with "test" are "set"
			echo "Static method '$methodName' called with the arguments:<br />";
			foreach ( $arguments as $arg ) {
				echo "$arg<br />";
			}
		}
	}
	
	MyClass::randomMethod( "apple", "peach", "strawberry" );
	
	?>
	
	</body>
</html>