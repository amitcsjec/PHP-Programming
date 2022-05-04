<!DOCTYPE html>
	<head>
		<title>Storing Objects as Strings</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Storing Objects as Strings</h1>
	<?php
	
	class User {
		public $username;
		public $password;
		public $loginsToday;
		
		public function __sleep() {
			// (Clean up; close database handles, etc)
			return array( "username", "password" );
		}
	}
	
	$user = new User;
	$user->username = "harry";
	$user->password = "monkey";
	$user->loginsToday = 3;
	echo "The original user object: <br />";
	print_r( $user );
	echo "<br /><br />";
	echo "Serializing the object...<br /><br />";
	$userString = serialize( $user );
	echo "The user is now serialized in the following string:<br />";
	echo "$userString<br /><br />";
	echo "Converting the string back to an object...<br /><br />";
	$obj = unserialize($userString);
	echo "The unserialized object:<br />";
	print_r( $obj );
	echo "<br />";
	
	?>
	
	</body>
</html>