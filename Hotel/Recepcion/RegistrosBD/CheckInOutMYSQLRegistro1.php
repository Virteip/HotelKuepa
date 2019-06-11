<?php

//Ciclo IF para revisar que esten todos los datos
  if (isset($_POST['Cod_Reserva']) && !empty($_POST['Cod_Reserva']))  {

//Variables que tendran el valor que se insertara en la tabla
      $NroReservaRegistro = $_POST ['Cod_Reserva'];
      $date = date('Y-m-d H:i:s');

//Variables para conectar la BD
      $host = "localhost";
      $user = "root";
      $pw = "";
      $bd = "hotel";

      $con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos") ;
      mysqli_select_db($con, $bd) or die("No se encontro la base de datos");


      echo "<h3>¡Guardado Correctamente!</h3> <br>";

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
$sql= "UPDATE reserva SET Check_In=CURDATE() WHERE Cod_Reserva=$NroReservaRegistro";
if(mysqli_query($con, $sql)){
echo "";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


  ?>
