<!DOCTYPE html>
<html>
<body>
<?php

// case-sensitive
define("WELCOME", "Hello my name is John Smith");
echo WELCOME;

echo "<hr />";

// Case-Insensitive
define("WELCOME2", "Hello my name is John Smith", true); // deprecated in PHP 8
echo WELCOME2;

echo "<hr />";

//Constants are Global
define ("CAR", "VOLVO");

function mycar() {
	echo CAR;
}

mycar();

?>
</body>
</html>