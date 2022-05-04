<!DOCTYPE html>
	<head>
		<title>A Car Application</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>A Car Application</h1>
	<?php
	
	class Car {
		public function __get( $propertyName ) {
			echo "The value of ' $propertyName ' was requested <br /> ";
			return "blue";
		}
	}
	$car = new Car;
	$x = $car->color; // Displays "The value of 'color' was requested"
	echo "The car's color is $x <br /> "; // Displays "The car's color is blue"
	
	?>
	
	</body> 
</html>