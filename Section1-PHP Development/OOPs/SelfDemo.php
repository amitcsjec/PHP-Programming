<!DOCTYPE html>
	<head>
		<title>A Simple Car Simulator</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>A Simple Car Simulator</h1>
	<?php
	
	class Car {
		public static function calcMpg( $miles, $gallons ) {
			return ( $miles / $gallons );
		}
		public static function displayMpg( $miles, $gallons ) {
			echo "This car’s MPG is: " . self::calcMpg( $miles, $gallons );
		}
	}
	echo Car::displayMpg( 168, 6 ); // Displays "This car’s MPG is: 28"
	
	?>
	
	</body> 
</html>