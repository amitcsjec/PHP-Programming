<!DOCTYPE html>
	<head>
		<title>Overriding Method in the Parent Class</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Overriding Method in the Parent Class</h1>
	<?php
	
	class Fruit {
		public function peel() {
			echo "<p>I'm peeing the fruit...</p>";
		}
		
		public function slice() {
			echo "<p>I'm slicing the fruit...</p>";
		}
		
		public function eat() {
			echo "<p>I'm eating the fruit. Yummy!</p>";
		}
		
		public function consume() {
			$this->peel();
			$this->slice();
			$this->eat();
		}
	}
	
	class Grape extends Fruit {
		public function peel() {
			echo "<p>No need to peel a grape!</p>";
		}
		
		public function slice() {
			echo "<p>No need to slice a grape!</p>";
		}
	}
	
	class Banana extends Fruit {
		public function consume() {
			echo "<p>I'm breaking off a banana...</p>";
			parent::consume();
		}
	}
	
	echo "<h2>Consuming an apple...</h2>";
	$apple = new Fruit;
	$apple->consume();
	
	$banana = new Banana;
	$banana->consume();
	
	?>
	
	</body>
</html>