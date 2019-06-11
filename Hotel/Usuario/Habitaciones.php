<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="HabitacionesStyle.css">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	</head>
	<body>
	
	<!–– 
	LOGO 
	––>
	<div id="cajaprincipal">
	<nav>
	<a href="Index.php"><img src="https://image.flaticon.com/icons/png/128/139/139899.png" id="logo"><a/>	
	</nav>
	
	<!–– 
	Menu opciones 
	––>
	<div id="opcionesmenu">
	<ol>
		<li><a href="Index.php">Registro Huesped</a></li>
		<li><a href="Habitaciones.php">Habitaciones</a></li>
		<li><a href="Categorias.php">Categorias</a></li>
	</ol>
	</div>
	
	
	<!–– 
	CONTENIDO BODY
	––>
	<div id="Habitaciones">
		
	<div id="Tipo1">
	
	<h1>Ingrese información de habitacion asignada:</h1>

	<form action = "registro.php" method=post name="formulario">
	
			Nro. de Habitación: <input type="text" name="Cod_Habitacion"></input><br>
			Categoría: <input type="text" name="Edad"></input><br>
			Piso: <input type="text" name="Edad"></input><br>
			
			<input type="submit" name="botonGuardar" value="Guardar">
	</form>		
	
	</div>
	
	</div>
	</body>
</html>