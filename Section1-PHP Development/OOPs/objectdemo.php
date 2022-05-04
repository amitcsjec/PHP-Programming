<!DOCTYPE html>
	<head>
		<title>Storing Objects as Strings</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Storing Objects as Strings</h1>
	<?php
	
	class Person {
		public $age;
	}
	
	$harry = new Person();
	$harry->age = 28;
	$harryString = serialize($harry);
	echo "Harry is now serialized in the following string: '$harryString'<br />";
	echo "Converting '$harryString' back to an object...<br />";
	$obj = unserialize( $harryString );
	echo "Harry age is: $obj->age<br />";
	
	?>
	
	</body>
</html>