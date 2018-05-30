<html>
	<head>
		<title>Ejemplo 4</title>
	</head>
	<body>
		<?PHP 
			$a = "hola";
			$$a = "mundo";

			print "$a $hola<br/>";
			print "$a ${$a}";
		?>
	</body>
</html>