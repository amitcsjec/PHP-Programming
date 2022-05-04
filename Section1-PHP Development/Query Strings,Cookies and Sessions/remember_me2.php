<!DOCTYPE html>
	<head>
		<title>Remembering User information with Cookies</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		
		<h2>Remembering User information with Cookies</h2>
		
		<?php
			if ( $firstName or $location ) {
		?>
		<p>
		Hi, <?php
				echo $firstName ? $firstName : "visitor"
			?>
			<?php
				echo $location ? " in $location" : ""
			?>!
		</p>
		
		<p>Here's is a little nursery rhyme I know:</p>
		
		<p><em>
		Hey diddle diddle, <br />
		The cat played the fiddle, <br />
		The cow jumped over the moon. <br />
		The little dog laughed to see such sport, <br />
		And the dish ran away with the spoon.
		</em></p>
		
		<p><a href="remember_me.php?action=forget">Forget about me!</a></p>
		
		<?php
			} else {
		?>
		
		<form action="remember_me.php" method="post">
			<div style="width: 30em;">
				<label for="firstName">What's your first name?</label>
				<input type="text" name="firtName" id="firstName" value="" />
				<label for="location">Where do you live?</label>
				<input type="text" name="location" id="location" value="" />
				<div style="clear: both;">
					<input type="submit" name="sendInfo" value="Send Info" />
				</div>
			</div>
		
		</form>
		
	<?php } ?>
	
			
	</body>
</html>