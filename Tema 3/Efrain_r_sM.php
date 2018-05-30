<html>
<head>
	<title>Ejemplo select multiple</title>
</head>
<body>
	<?php  
		$idiomas = $_REQUEST['idiomas'];
		foreach ($idiomas as $idioma) 
			print ("$idioma<br/>");
	?>
</body>
</html>