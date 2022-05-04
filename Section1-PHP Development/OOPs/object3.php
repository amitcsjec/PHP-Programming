<!DOCTYPE html>
	<head>
		<title>Storing Objects as Strings</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Storing Objects as Strings</h1>
	<?php
	
	class User {
		public function __wakeup() {
			echo "Yawn... what's for the breakfast?<br />";
		}
	}
	
	$user = new User;
	$userString = serialize( $user );
	$obj = unserialize( $userString );
	
	?>
	
	</body>
</html>