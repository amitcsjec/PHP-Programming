<!DOCTYPE html>
<html>
<body>

<?php

	// BASIC FUNCTION
	function displaytxt() {
		echo "My First Function";
	}
	
	displaytxt ();
	
	echo "<hr />";
	
	// FUNCTION ARGUMENTS
	function myCar($car, $color) {
		echo "$car, $color<br>";
	}
	
	myCar("Volvo", "blue");
	myCar("BMW", "red");
	myCar("Honda", "green");

?>

</body>
</html>