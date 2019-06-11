<?php

	if (isset($_POST['Cod_Habitacion']) && !empty($_POST['Cod_Habitacion'])&&
		 isset($_POST['Cod_Categoria']) && !empty($_POST['Cod_Categoria'])&&
		 isset($_POST['Piso_numero']) && !empty($_POST['Piso_numero'])){
			 
		    $HabitacionRegistro = $_POST['Cod_Habitacion'];
			$CategoriaRegistro = $_POST['Cod_Categoria'];
			$PisoRegistro = $_POST ['Piso_numero'];
			
			
			$host = "localhost";
			$user = "root";
			$pw = "";
			$bd = "hotel";
			
			$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos") ;
			mysqli_select_db($con, $bd) or die("No se encontro la base de datos");
		
			mysqli_query($con, "INSERT INTO habitacion(Cod_Habitacion,Cod_Categoria,Piso_numero) VALUES ('$HabitacionRegistro','$CategoriaRegistro','$PisoRegistro')");
			echo "Guardado Correctamente <br>";
			echo "<a href='index.php' > Volver al Menu </a>";
		 }
	else
		{
			echo "Favor ingresar todos los campos";
			
		}


?>