<!DOCTYPE html>
	<head>
		<title>Creating and Using a Constructor</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating and Using a Constructor</h1>
	<?php
	
	class Person {
		private $_firstName;
		private $_lastName;
		private $_age;
		
		public function __construct( $firstName, $lastName, $age ) {
			$this->_firstName = $firstName;
			$this->_lastName = $lastName;
			$this->_age = $age;
		}
		
		public function showDetails() {
			echo "$this->_firstName $this->_lastName, age $this->_age<br />";
		}
	}
	
	$p = new Person( "Harry", "Walters", 28 );
	$p->showDetails();
	
	?>
	
	</body>
</html>