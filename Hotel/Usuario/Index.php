<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
		<link rel="stylesheet" href="Estilos/Estilo.css">
	<script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("Salida").value);
                var pickdt = new Date(document.getElementById("Entrada").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("Salida")){
            document.getElementById("Num_dias").value=GetDays();
        }
    }
    </script>

	</head>

		<body>
			<!––
			Barra Sticky de Navegacion
			––>

			<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <a class="navbar-brand" href="Index.php"><img src="https://image.flaticon.com/icons/png/128/139/139899.png" id="logo" width="30" height="30"></a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="Index.php"> REGISTRO DE HUESPED <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="Habitaciones.php">HABITACIONES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="RegistroReservas.php">REGISTRO DE RESERVAS</a>
			      </li>
						<li class="nav-item">
							<a class="nav-link" href="CheckInOut.php">CHECK-IN & CHECK-OUT</a>
						</li>
			    </ul>
			  </div>
			</nav>

			<!––
		Cards Categorias
			––>
<h3>CATEGORIAS Y DESCRIPCIONES</h3>
			<div class="card-deck" >
  <div class="card bg-info mb-3">
    <img class="card-img-top" src="http://www.enjoytrip.com.br/wp-content/uploads/2018/03/332216_769760_suite_presidential_sheraton_rio_2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Deluxe (Cat. #1)</h5>
      <p class="card-text">La habitación incluye una cama king, TV por cable, WiFi, Aire Acondicionado, Balcón, Agua caliente y mini-bar. Capacidad: 2 personas.</p>
    </div>
  </div>
  <div class="card bg-info mb-3">
    <img class="card-img-top" src="https://hotelparkway.com.co/wp-content/uploads/2016/11/habitacion-cuadruple1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Multiple (Cat. #2)</h5>
      <p class="card-text">La habitación incluye dos camas matrimoniales, Sofa-cama, TV por cable, WiFi, Aire Acondicionado, Agua caliente y mini-bar. Capacidad: 5 personas. </p>
    </div>
  </div>
  <div class="card bg-info mb-3">
    <img class="card-img-top" src="https://www.edenhotelamsterdam.com/media/images/EH---EDEN-HOTEL-AMSTERDAM---SINGLE---2.width-2560.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Single (Cat. #3)</h5>
      <p class="card-text">La habitación incluye una cama matrimonial, TV por cable, WiFi, Aire Acondicionado, Agua caliente. Capacidad: 1 persona.</p>
    </div>
  </div>
</div>


			<!––
			Registro Huesped
			––>
			<div id="InfoPersonal">

				<form action ="RegistrosBD/Registro.php"  required="required" method=post name="formulario">

					<label>Cédula:</label>
				  <input type="number_format" class="form-control-lg" required="required" name="Cedula_Huesped"></input><br>


					<label>Nombre:</label>
					 <input type="text" class="form-control-lg" required="required" name="Nombre_Huesped"></input><br>


					<label>Apellido:</label>
					 <input type="text" class="form-control-lg" required="required" name="Apellido_Huesped"></input><br>


					<label>Telefono:</label>
					 <input type="number_format" class="form-control-lg" required="required" name="Telefono_Huesped"></input><br>


					<label>Direccion: </label>
					<input type="text" class="form-control-lg" required="required" name="Direccion_Huesped"></input><br>

		<!––
	Fechas de llegada y salida
	––>

    <label>Entrada:</label>
  	<input type="date" class="form-control-lg"  id="Entrada" name="Fecha_Inicio" onchange="cal()"><br>


  	<label>Salida:</label>
  	<input type="date" class="form-control-lg" id="Salida" name="Fecha_Fin" onchange="cal()"/><br>


   	<label>Numero de dias:</label>
   	<input type="text" class="form-control-lg" id="Num_dias" name="Num_dias" readonly="readonly"/><br>




		<!––
	Asignar Habitacion
	––>

<label>
<select name="Cod_Habitacion" required="required" class="form-control-lg "  autocomplete="on" autofocus>

	<option value=""> Habitacion: </option>
			<?php

				$host = "localhost";
				$user = "root";
				$pw = "";
				$bd = "hotel";


				$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos") ;
				mysqli_select_db($con, $bd) or die("No se encontro la base de datos");
				$query1 = "SELECT Cod_Habitacion, Precio_noche FROM habitacion order by Cod_Habitacion asc";
				$res1 = mysqli_query($con, $query1);


				while($row0 = @mysqli_fetch_array($res1))
				{

					echo("<option>");
          echo($row0["Cod_Habitacion"]);
					echo("");
					echo ("</option>");

				}

				?>

</select> </br>


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
