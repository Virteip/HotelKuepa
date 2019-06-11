<html>

	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
		<link rel="stylesheet" href="Estilos/RegistroReservas.css">
		<style>
		body {background-color: white;}
		</style>
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
tabla para mostrar reservas
	––>
			<?php
//coneccion a base de datos
				$host = "localhost";
				$user = "root";
				$pw = "";
				$bd = "hotel";

//verificar la coneccion
				$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos") ;
				mysqli_select_db($con, $bd) or die("No se encontro la base de datos");

//mostrar tabla
$result = mysqli_query($con,"SELECT Cod_Reserva, Cedula_Huesped, Cod_Habitacion, Fecha_Inicio, Fecha_Fin, Num_dias, Precio_total FROM reserva");

echo "<table  class= 'table table-bordered table-hover'>
<tr>
<th><h4>Nro. de Reserva</h4></th>
<th><h4>ID del huésped</h4></th>
<th><h4>Nro. Habitación</h4></th>
<th><h4>Fecha de Inicio</h4></th>
<th><h4>Fecha de Fin</h4></th>
<th><h4>Nro. de días</h4></th>
<th><h4>Precio Total</h4></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><strong>" . $row['Cod_Reserva'] . "</strong></td>";
echo "<td>" . $row['Cedula_Huesped'] . "</td>";
echo "<td>" . $row['Cod_Habitacion'] . "</td>";
echo "<td>" . $row['Fecha_Inicio'] . "</td>";
echo "<td>" . $row['Fecha_Fin'] . "</td>";
echo "<td>" . $row['Num_dias'] . "</td>";
echo "<td>" . $row['Precio_total'] . "</td>";
echo "</tr>";
}
echo "</table>";
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
	    <a href=""> Sergio Pietri</a>
	  </div>
	</footer>

</html>
