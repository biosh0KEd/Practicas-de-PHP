<html>
	<head>
		<title>Ejemplo estructura de control</title>
	</head>
	<body>
		<?PHP
		$sexo = "H";
		$nombre = "Efrain";
			if ($sexo == 'M')
				$saludo = "Bienvenida, ";
			else
				$saludo = "Bienvenido, ";
			$saludo = $saludo . $nombre;
			print ($saludo);
		?>
	</body>
</html>