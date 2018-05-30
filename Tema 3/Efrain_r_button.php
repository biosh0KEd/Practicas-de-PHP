<html>
<head>
	<title>Ejemplo boton</title>
</head>
<body>
	<?php  
	  $actualizar = false;
		$actualizar = $_REQUEST['actualizar'];
		if ($actualizar) {
			print ("Se han actualizado los datos");
		}
	?>
</body>
</html>