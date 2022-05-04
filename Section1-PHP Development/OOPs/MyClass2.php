<!DOCTYPE html>
	<head>
		<title>Defining and Using Object properties</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
	<?php
	
	class MyClass2 {
		public function getGreeting() {
			return "Hello World!";
		}
		
		public function hello() {
			echo $this->getGreeting();
		}
	}
	
	$obj = new MyClass2;
	$obj-> hello(); // Displays “Hello, World!”
	
	?>
	</body> 
</html>