<style media="screen">
	* {
		text-align: center;
	}

</style>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

	</head>

		<body>
			<!––
			Barra Sticky de Navegacion
			––>

			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <a class="navbar-brand" href="Index.php"><img src="https://image.flaticon.com/icons/png/128/139/139899.png" id="logo" width="30" height="30"></a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="../Index.php"> REGISTRO DE HUESPED <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../Habitaciones.php">HABITACIONES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../RegistroReservas.php">REGISTRO DE RESERVAS</a>
			      </li>
						<li class="nav-item">
							<a class="nav-link" href="../CheckInOut.php">CHECK-IN & CHECK-OUT</a>
						</li>
			    </ul>
			  </div>
			</nav>


				<!––
					Codigo PHP para registro en BD hotel
					––>
			<?php

//Ciclo IF para revisar que esten todos los datos
				if (
					isset($_POST['Cedula_Huesped']) && !empty($_POST['Cedula_Huesped'])&&
					isset($_POST['Nombre_Huesped']) && !empty($_POST['Nombre_Huesped'])&&
					isset($_POST['Apellido_Huesped']) && !empty($_POST['Apellido_Huesped'])&&
					isset($_POST['Telefono_Huesped']) && !empty($_POST['Telefono_Huesped'])&&
					isset($_POST['Direccion_Huesped']) && !empty($_POST['Direccion_Huesped'])&&
					isset($_POST['Fecha_Inicio']) && !empty($_POST['Fecha_Inicio'])&&
					isset($_POST['Fecha_Fin']) && !empty($_POST['Fecha_Fin'])&&
					isset($_POST['Num_dias']) && !empty($_POST['Num_dias'])&&
					isset($_POST['Cod_Habitacion']) && !empty($_POST['Cod_Habitacion']))  {

//Variables que tendran el valor que se insertara en la tabla
						$CedulaRegistro = $_POST ['Cedula_Huesped'];
						$nombreRegistro = $_POST['Nombre_Huesped'];
						$apellidoRegistro = $_POST['Apellido_Huesped'];
						$telefonoRegistro = $_POST['Telefono_Huesped'];
						$direccionRegistro = $_POST['Direccion_Huesped'];
						$InicioRegistro = $_POST['Fecha_Inicio'];
						$FinRegistro = $_POST['Fecha_Fin'];
						$TotalDiasRegistro = $_POST['Num_dias'];
						$CodHabRegistro = $_POST['Cod_Habitacion'];

//Variables para conectar la BD
						$host = "localhost";
						$user = "root";
						$pw = "";
						$bd = "hotel";

						$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos") ;
						mysqli_select_db($con, $bd) or die("No se encontro la base de datos");


						$resultado = mysqli_query($con,"SELECT Precio_noche FROM habitacion WHERE $CodHabRegistro=Cod_Habitacion");
						$Precio = $resultado=fetch_assoc();


							print ("Total a Pagar: $Precio * Num_dias");

						}


				else
					{
						echo "Favor ingresar todos los campos";

					}


//Calcular el total a pagar, insert de la tabla de reserva

//actualizar estado de la habitacion

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql= "UPDATE habitacion SET No_Disponible=1 WHERE Cod_Habitacion=$CodHabRegistro";
if(mysqli_query($con, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


				?>

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
	     Sergio Pietri
	  </div>
	</footer>

</html>
