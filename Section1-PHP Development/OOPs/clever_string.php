<!-- Create a Wrapper String Class -->

<!DOCTYPE html>
	<head>
		<title>Creating a Wrapper Class with __call()</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Creating a Wrapper Class with __call()</h1>
	<?php
	
	class CleverString {
		private $_theString = "";
		private static $_allowedFunctions = array( "strlen", "strtoupper", "strpos" );
		
		public function setString( $stringVal ) {
			$this->_theString = $stringVal;
		}
		
		public function getString() {
			return $this->_theString;
		}
		
		public function _call( $methodName, $arguments ) {
			if ( in_array( $methodName, CleverString::$_allowedFunctions ) ) {
				array_unshift( $arguments, $this->_theString );
				return call_user_func_array( $methodName, $arguments );
			} else {
				die ( "<p>Method 'CleverString::$methodName' doesn't exist</p>" );
			}
		}
	}
	
	$myString = new CleverString;
	$myString->setString( "Hello!" );
	echo "<p>The string is: " . $myString->getString() . "</p>";
	echo "<p>The length of the string is: " . $myString->strlen() . "</p>";
	echo "<p>The string in uppercase letters is: " . $myString->strtoupper() . "</p>";
	echo "<p>The letter 'e' occurs at position: " . $myString->strpos("e") . "</p>";
	$myString->madeUpMethod();
	
	?>
	
	</body>
</html>