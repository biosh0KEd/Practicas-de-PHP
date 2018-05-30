<html>
<head>
	<title>Ejemplo checkbox</title>
</head>
<body>
	<?php  
		$extras = $_REQUEST['extras'];

		foreach ($extras as $extra) {
			print ("$extra<br/>");
		}
	?>
</body>
</html>