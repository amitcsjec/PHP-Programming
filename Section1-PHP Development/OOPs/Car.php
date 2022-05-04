<!DOCTYPE html>
	<head>
		<title>Defining and Using Object properties</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Defining and Using Object Properties</h1>
		
		<?php
		class Car {
			public $color;
			public $manufacturer;
		}
			
		 $beetle = new Car();
		 $beetle->color = "red";
		 $beetle->manufacturer = "Volkswagen";
		 
         $mustang = new Car();
		 $mustang->color = "green";
		 $mustang->manufacturer = "Ford";
		 
		 echo "<h2>Some properties:</h2>";
		 echo "<p>The Beetle's color is " . $beetle->color . ".</p>";
		 echo "<p>The Mustang's manufacturer is " . $mustang->manufacturer . ".</p>";
		 echo "<h2>The \$beetle Object:</h2><pre>";
         print_r( $beetle ); // Displays “Car Object ( )”
		 echo "</pre>";
		 echo "<h2>The \$mustang Object:</h2><pre>";
         print_r( $mustang ); // Displays “Car Object ( )”
		?>
		
	</body> 
</html>