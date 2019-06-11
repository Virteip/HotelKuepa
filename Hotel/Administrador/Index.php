<?php
//Conexion con BD
include "RegistrosBD/config.php";

//Accionar ciclo una vez se presione SUBMIT
if(isset($_POST['IngresarBoton'])){


//Asignar variables
    $uname = mysqli_real_escape_string($con,$_POST['Codename_Usuario']);
    $password = mysqli_real_escape_string($con,$_POST['Password_Usuario']);


    if ($uname != "" && $password != ""){

//Buscar las variables y comparar su existencia con lo escrito
        $sql_query = "select count(*) as  cntUser from usuarios where Codename_Usuario='".$uname."' and Password_Usuario='".$password."' and Estado_Usuario= 1";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
		
		 

//Si es positivo el ingreso del usuario y contrasena ir a HomeAdmin.php
        if($count > 0){
	
            header('Location: HomeAdmin.php');
			
        }

    }

}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
		<link rel="stylesheet" href="Estilos/Estilo.css">

	</head>

<body>

<div id="formingreso">
	<form method="post" action="" class="justify-content-center">

		<h1>ADMINISTRADOR</h1>

<div class="form-group" style="width:300px">
				<input type="text" class="form-control form-control-lg" id="Codename_Usuario" name="Codename_Usuario" placeholder="Usuario"/>
</div>


<div class="form-group" style="width:300px">
				<input type="password" class="form-control form-control-lg" id="Password_Usuario" name="Password_Usuario" placeholder="Contraseña" />
</div>


				<input type="submit" value="Ingresar" name="IngresarBoton" id="IngresarBoton" class="btn btn-primary"/>

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
	  <div class="footer-copyright text-center py-5">© 2019 Copyright:
	    <a href=""> Sergio Pietri</a>
	  </div>
	</footer>

</html>
