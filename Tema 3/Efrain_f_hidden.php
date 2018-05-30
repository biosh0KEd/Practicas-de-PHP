<head>
	<title>Ejemplo hidden</title>
</head>
<body>
	<form action="Efrain_r_hidden.php" method="post">
	<?php  
		$usuario = "xd";
		print ("<input type='hidden' name='username' value='$usuario'/><br/>");
	?>
		<input type="submit" value="ingresar"/>
	</form>
</body>
</html>