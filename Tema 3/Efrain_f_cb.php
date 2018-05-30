<html>
<head>
	<title>Ejemplo checkbox</title>
</head>
<body>
	<form action="Efrain_r_cb.php" method="post">
		<p>Elementos</p> 
		<label for="Garaje">Garaje :</label>
		<input id="Garaje" type="checkbox" name="extras[]" value="Garaje" checked/><br/>
		<label for="Piscina">Piscina :</label>
		<input id="Piscina" type="checkbox" name="extras[]" value="Piscina"/><br/>
		<label for="Jardin">Jardin :</label>
		<input id="Jardin" type="checkbox" name="extras[]" value="Jardin"/><br/>
		<input type="submit" value="ingresar"/>
	</form>
</body>
</html>