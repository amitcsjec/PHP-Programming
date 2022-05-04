<!DOCTYPE html>
	<head>
		<title>Determining an Object's Class</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Determining an Object's Class</h1>
	<?php
	
	class Fruit {
	}
	
	class SoftFruit extends Fruit {
	}
	
	class HardFruit extends Fruit {
	}
	
	function eatSomeFruit( array $fruitToEat ) {
		foreach( $fruitToEat as $itemOfFruit ) {
			if ( get_class( $itemOfFruit ) == "SoftFruit" || get_class( $itemOfFruit ) == "HardFruit" ) {
				echo "Eating the Fruit - yummy!<br />";
			}
		}
	}
	
	$banana = new SoftFruit();
	$apple = new HardFruit();
	eatSomeFruit( array( $banana, $apple ) );
	
	?>
	
	</body>
</html>