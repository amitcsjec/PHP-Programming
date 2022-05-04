<html>
<body>
<h3>Log files in /var/logs</h3>
<hr>
<?php
$filelist = glob ('/var/log/*');
foreach ($filelist as $filename) {
	echo $filename, '<br>';
}
?>
</body>
</html>