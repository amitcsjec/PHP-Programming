<!DOCTYPE html>
<html>
<body>

<h2>PHP Arithmetic Operators</h2>
<!-- Used to compare two values -->

<?php

	$x = 50;
	$y = 20;
	
	// ADDITION
	echo $x + $y;
	echo "<hr />";
	
	// SUBTRACTION
	echo $x - $y;
	echo "<hr />";
	
	// MULTIPLICATION
	echo $x * $y;
	echo "<hr />";
	
	// DIVISION
	echo $x / $y;
	echo "<hr />";
	
	// MODULUS
	echo $x % $y;

?>

<h2>PHP Assignment Operator</h2>
<!-- Used with numeric values to write values to a variable -->

<?php

	// The left operand is assigned the value on the right
	$x = 20;
	echo $x;

?>

<h2>Comparison Operators</h2>
<!-- Used to compare two values (number to a string) -->

<?php

	// Equal
	$x = 300;
	$y = "300";
	var_dump($x == $y);
	
	// Identical
	$x = 300;
	$y = "300";
	var_dump($x === $y);
	
	// Not equal
	$x = 300;
	$y = "300";
	var_dump($x != $y);
	
	// Not equal
	$x = 300;
	$y = "300";
	var_dump($x <> $y);
	
	// Not Identical
	$x = 300;
	$y = "300";
	var_dump($x !== $y);
	
	// Greater than
	$x = 300;
	$y = 300;
	var_dump($x > $y);
	
	// Lesser than
	$x = 300;
	$y = 300;
	var_dump($x < $y);
	
	// Greater than or equal to
	$x = 300;
	$y = 300;
	var_dump($x >= $y);
	
	// Less than or equal to
	$x = 300;
	$y = 300;
	var_dump($x <= $y);

?>

<h2>Increment/Decrement Operators</h2>
<!-- Used to increment or decrement a variables value -->

<?php

	// Post-increment - returns $x, then increments $x by 1
	$x = 50;
	echo $x++;
	echo "<hr />";
	
	// Pre-increment - increments $x by 1, then returns $x
	$x = 50;
	echo ++$x;
	echo "<hr />";
	
	// Pre-decrement - Decrements $x by 1, then returns $x
	$x = 50;
	echo --$x;
	echo "<hr />";
	
	// Post-decrement - Returns $x, then decreases $x by one
	$x = 50;
	echo $x--;

?>

<h2>Logical Operators</h2>
<!-- used to combine conditional statements -->

<?php

	// And ~ True if both $x and $y are true
	$x = 200;
	$y = 300;
	
	if ($x = 200 and $y = 300) {
		echo "True";
		echo "<hr />";
	}
	
	// Or - True if either $x or $y is true
	$x = 200;
	$y = 300;
	
	if ($x = 200 or $y = 90) {
		echo "True";
		echo "<hr />";
	}
	
	// And - && - True if both $x and $y are true
	$x = 200;
	$y = 300;
	
	if ($x = 200 && $y = 300) {
		echo "True";
		echo "<hr />";
	}
	
	// Or - $x || $y - True if either $x or $y is true
	$x = 200;
	$y = 300;
	
	if ($x = 200 || $y = 80) {
		echo "True";
		echo "<hr />";
	}
	
	// Not - '$x - True if is not true
	$x = 200;
	$y = 300;
	
	if ($x != 200) {
		echo "True";
		echo "<hr />";
	}

?>

<h2>PHP String Operators</h2>
<!-- Used specifically for Strings -->

<?php

	// Concatenation of $x and $y
	$x = "Hello";
	$y = " World!";
	echo $x . $y;
	echo "<hr />";
	
	// Concatenation assignment - Appends $txt2 to $txt1
	$x = "John";
	$y = " Smith";
	$x .= $y;
	echo $x;
	echo "<hr />";

?>

<h2>Array Operators</h2>
<!-- Used to compare arrays -->

<?php

	// Union - Union of $x and $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("c" => "pink", "d" => "brown");
	
	print_r($x + $y); // Union
	echo "<hr />";
	
	// Equality - Returns true if $x and $y have the same key/value pairs
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	
	var_dump($x == $y);
	echo "<hr />";
	
	// Identity - Returns true if $x and $y have same key/value pairs in the same order and of the same types
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	
	var_dump($x === $y);
	echo "<hr />";
	
	// Inequality - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	
	var_dump($x != $y);
	echo "<hr />";
	
	// Inequality - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	
	var_dump($x <> $y);
	echo "<hr />";
	
	// Non-identity - Returns true if $x is not identical to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	
	var_dump($x != $y);
	echo "<br />";

?>

</body>
</html>