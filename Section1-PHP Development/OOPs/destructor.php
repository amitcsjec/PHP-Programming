<!DOCTYPE html>
	<head>
		<title>Creating and Using a Destructor</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating and Using a Destructor</h1>
	<?php
	
	class Person {
		public function save() {
			echo "Saving this object to the database...<br />";
		}
		
		public function __destruct() {
			$this->save();
		}
	}
	
	$p = new Person;
	unset( $p );
	$p2 = new Person;
	die( "Something gone horribly wrong!<br />" );
	
	?>
	
	</body>
</html>