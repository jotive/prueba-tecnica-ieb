<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>IEB - App</title>
	<meta name="description" content="A web app to test">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">

	<header class="row justify-content-center">
		<div class="col-4 text-center">
			<h1>Aplicativo IEB</h1>
			<h2>Bienvenido</h2>
			<br>
			<p>Ingresa tus datos en el siguiente formulario:</p>
		</div>
	</header>

	<!-- CONTENT -->
	<section class="row justify-content-center">
		<div class="message" id="message"></div>
		<article class="col-4 text-center">
			<form action="" class="" method="post" onsubmit="return autenticar()" id="homeLogin">

				<div class="form-group">
					<div class="mb-3">
						<label for="user">Usuario</label>
						<input type="text" class="form-control" name="user" id="user" placeholder="Nombre de usuario">
					</div>
				</div>

				<div class="form-group">
					<div class="mb-3">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Ingresa tu contraseña">
					</div>
				</div>

				<div class="col-auto">
    				<button type="submit" class="btn btn-primary mb-3" >Ingresar</button>
  				</div>

				<div class="form-group">
				</div>
			</form>
		</article>

	</section>

	<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
	<footer class="fixed-bottom">
		<div>
			<p>Developer by: Jose Eduardo Tirado Verbel @jotive</p>
			<p>&copy; <?= date('Y') ?></p>
		</div>
	</footer>

</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="assets/functions.js" type="text/javascript"></script>

</body>
</html>
