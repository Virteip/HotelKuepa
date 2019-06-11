<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
		<link rel="stylesheet" href="Estilos/Estilo.css">

	</head>

	<body>
			<!––
			Barra Sticky de Navegacion
			––>

			<nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <a class="navbar-brand" href="Index.php"><img src="https://image.flaticon.com/icons/png/128/139/139899.png" id="logo" width="30" height="30"></a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				
					<li class="nav-item">
						<a class="nav-link" href="HomeAdmin.php">AÑADIR HABITACIONES</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="Categorias.php">AÑADIR CATEGORIAS </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="Usuarios.php">AÑADIR USUARIOS </a>
					</li>
						
					<li class="nav-item ">
						<a class="nav-link" href="Huesped.php"> REGISTRO DE HUESPED </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="RegistroReservas.php">REGISTRO DE RESERVAS </a>
					</li>
			     

			    </ul>
			  </div>
			</nav>

	<!––
Formulario para añadir habitaciones
––>



<div id="InfoPersonal">
	<form action ="RegistrosBD/Registro.php"  required="required" method=post name="formulario">

					<label><h2>Nro. Habitacion:</h2></label><br>
					<input type="text" class="form-control-lg" id="Cod_Habitacion" name="Cod_Habitacion" /><br>


					<label><h2>Categoria:</h2></label><br>
					<input type="text" class="form-control-lg" id="Cod_Categoria" name="Cod_Categoria" /><br>


					<label><h2>Piso:</h2></label><br>
					<input type="text" class="form-control-lg" id="Piso_numero" name="Piso_numero" /><br>

					<label><h2>Precio por Noche:</h2></label><br>
					<input type="text" class="form-control-lg" id="Precio_noche" name="Precio_noche" /><br>


					<label>
					<input type="submit" class="btn btn-primary btn-lg" name="botonGuardar" value="Guardar" id="botonguardar">
					</label>
	
	</form>

</div>

		<!––
script JS para Bootstrap
––>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

<!––
footer
––>

<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
	<a href=""> Sergio Pietri</a>
  </div>
</footer>

			</html>
