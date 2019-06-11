<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
		<link rel="stylesheet" href="Estilos/estilo.css">

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
			        <a class="nav-link" href="Index.php"> PÁGINA PRINCIPAL <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="Habitaciones.php">HABITACIONES</a>
			      </li>

						
			    </ul>
			  </div>
			</nav>

			<!––
gallery
			––>

			<div class="bd-example">
			  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner">
			      <div class="carousel-item active">
			        <img src="https://images.pexels.com/photos/261395/pexels-photo-261395.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block h-90 w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h1><strong>BIENVENIDOS</strong></h1>
			          <p>Eleva tu cuerpo y mente a un lugar mágico.</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="https://images.pexels.com/photos/1320679/pexels-photo-1320679.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100 center-block" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h1><strong>NATURALEZA</strong></h1>
			          <p>Paseos en lancha a cayos cercanos.</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h1><strong>EXQUISITOS MANJARES</strong></h1>
								<p>Solicita la carta con tu reserva.</p>
							</div>
			      </div>
			    </div>
			    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>

			<!––
	Informacion
			––>


<div id="article1">
	<div class="" id="artimagen">
		<img src="https://cdn.pixabay.com/photo/2016/12/27/19/37/beach-wedding-1934732_960_720.jpg" alt="owners">
	</div>
	<div class="" id="artparra">
		<p><h4>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </h4><br>
		 - <strong>Fundadores</strong></p>
	</div>
</div>

<div class="formcorreo">

	<form class="correo" action="correo.php" method="post">
		<span class="label label-default"><h1>NO SE QUE PONER AQUI</h1></span>
		<input type="email" name="email" value="" placeholder="tu@correo.com">
		<button type="button" name="button" class="btn btn-primary btn-sm" >Obtener Ofertas</button>
	</form>

</div>

<div id="article2">
	<div class="" id="segundoimagen">
		<img src="https://i.pinimg.com/originals/8a/52/f2/8a52f2325b196ead37e0e8a573b92fa2.jpg" alt="">
	</div>
	<div class="" id="segundoparra">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>



			<!––
		Cards Categorias
			––>
<h3>VACACIONES SOÑADAS</h3>




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
