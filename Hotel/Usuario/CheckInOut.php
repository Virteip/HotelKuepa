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
			      <li class="nav-item active">
			        <a class="nav-link" href="Index.php"> REGISTRO DE HUESPED </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="Habitaciones.php">HABITACIONES </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="RegistroReservas.php">REGISTRO DE RESERVAS </a>
			      </li>
						<li class="nav-item">
							<a class="nav-link" href="CheckInOut.php">CHECK-IN & CHECK-OUT </a>
						</li>
			    </ul>
			  </div>
			</nav>

			<!––
Check In
			––>

	<div id="InfoPersonal">

				<form action ="RegistrosBD/CheckInOutMYSQLRegistro1.php"  required="required" method=post name="formulario">

					<label><strong>Nro. de Reserva</strong></label>
					<input type="datetime" class="form-control-lg" name="Cod_Reserva"></input><br>


					<label>
					<input type="submit" class="btn btn-primary btn-lg" name="botonGuardar" value="CHECK IN" id="botonguardar">
					</label>

				</form>

	<hr class="mb-5">

				<form action ="RegistrosBD/CheckInOutMYSQLRegistro2.php"  required="required" method=post name="formulario">

					<label><strong>Nro. de Reserva</strong></label>
					<input type="number_format" class="form-control-lg" name="Cod_Reserva"></input><br>

					<label>
					<input type="submit" class="btn btn-primary btn-lg" name="botonGuardar" value="CHECK OUT" id="botonguardar">
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
