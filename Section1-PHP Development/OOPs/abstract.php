<!DOCTYPE html>
	<head>
		<title>Overriding Method in the Parent Class</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Overriding Method in the Parent Class</h1>
	<?php
	
	abstract class Shape {
		private $_color = "black";
		private $_filled = false;
		
		public function getColor( $shape ) {
			return $this->_color;
		}
		
		public function setColor( $color ) {
			$this->color = $color;
		}
		
		public function isFilled() {
			return $this->_filled;
		}
		
		public function fill() {
			$this->_filled = true;
		}
		
		public function makeHollow() {
			$this->_filled = false;
		}
		
		abstract public function getArea();
	}
	
	class Rectangle extends Shape {
		private $_width = 0;
		private $_height = 0;
		
		public function getWidth() {
			return $this->_width;
		}
		
		public function getHeight() {
			return $this->_height;
		}
		
		public function setWidth( $width ) {
			$this->_width = $width;
		}
		
		public function setHeight( $height ) {
			$this->_height =  $height;
		}
		
		public function getArea() {
			return this->_width * $this->_height;
		}
	}
	
	/*class ShapeInfo {
		private $_shape;
		public function setShape( $shape ) {
			$this-> shape = $shape;
		}
		public function showInfo( ) {
			echo " < p > The shape’s color is " . $this-> shape-> getColor();
			echo ", and its area is " . $this-> shape-> getArea() .". < /p > ";
		}
	} */
	
	$myRect = new Rectangle;
	$myRect->setColor( "yellow" );
	$myRect->fill();
	$myRect->setWidth( 4 );
	$myRect->setHeight( 5 );
	// $info = new ShapeInfo();
	// $info->setShape( $myRect );
	// $info->showInfo(); // // Displays “The shape’s color is yellow, and its area is 20.”
	
	?>
	
	</body>
</html>