<?php

if ( isset( $_POST["sendInfo"] ) ) {
	storeInfo();
} elseif( isset( $_GET["action"] ) and $_GET["action"] == "forget" ) {
	forgetInfo();
} else {
	displayPage();
}

function storeInfo() {
	if ( isset( $_POST["firstName"] ) ) {
		setcookie( "firstName", $_POST["firstName"], time() + 60 * 60 * 24 * 365, "", "", false, true );
	}
	
	if ( isset( $_POST["location"] ) ) {
		setcookie( "location", $_POST["location"], time() + 60 * 60 * 24 * 365, "", "", false, true );
	}
	
	header( "Location: remember_me.php" );
}

function forgetInfo() {
	setcookie( "firstName", "", time() - 3600, "", "", false, true );
	setcookie( "location", "", time() - 3600, "", "", false, true );
	header( "Location: remember_me.php" );
}

function displayPage() {
	$firstName = ( isset( $_COOKIE["firstName"] ) ) ? $_COOKIE["firstName"] : "";
	$location = ( isset( $_COOKIE["location"] ) ) ? $_COOKIE["location"] : "";
}

?>