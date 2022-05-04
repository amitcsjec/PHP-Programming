<!DOCTYPE html>
	<head>
		<title>Defining and Using Object properties</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
	<?php
	
	class Car {
		public $color;
		public $manufacturer;
		static public $numberSold = 123;
	}
	Car::$numberSold++;
	echo Car::$numberSold; // Displays “124”
	
	?>
	</body> 
</html>