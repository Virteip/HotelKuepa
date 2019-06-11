<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

	</head>

  <body class="bg-light" data-gr-c-s-loaded="true">

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
            <a class="nav-link" href="Index.php"> REGISTRO DE HUESPED <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Habitaciones.php">HABITACIONES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Categorias.php">CATEGORIAS</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container" id="toppart">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://image.flaticon.com/icons/png/128/139/139899.png" alt="" width="72" height="72">
        <h2>Formulario de pago</h2>
      </div>


        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Direccion de cobro</h4>
          <form class="needs-validation was-validated" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                Nombre válido requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Apellido válido requerido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
              <div class="invalid-feedback">
              Favor ingresar dirección de email válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="" required="">
              <div class="invalid-feedback">
              Favor ingresar dirección válida.
              </div>
            </div>

            <hr class="mb-4">

            <h4 class="mb-3">Pago</h4>



            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nombre Completo</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Como aparece en la tarjeta</small>
                <div class="invalid-feedback">
                  Se requiere el nombre
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número de la tarjeta de crédito</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                Número de trjeta requerido.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Fecha de expiración</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Fecha de expiración requerida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Código de seguridad requerido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar Pago</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Copyright © 2019 Sergio Pietri</p>

      </footer>


    <script src="./Checkout example for Bootstrap_files/jquery-3.2.1.slim.min.js.descarga" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Checkout example for Bootstrap_files/popper.min.js.descarga"></script>
    <script src="./Checkout example for Bootstrap_files/bootstrap.min.js.descarga"></script>
    <script src="./Checkout example for Bootstrap_files/holder.min.js.descarga"></script>

</body></html>
