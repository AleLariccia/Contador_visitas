<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contador de visitas </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta name="author" content="Alejandro Lariccia">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section class="container">
		<h1 class="titulo">Contador de visitas</h1>
		<div class="caja"><?php echo contar_usuarios(); ?></div>
		<p class="visit">visitas</p>
	</section>
	<footer><p>Diseñado y Desarrollado por Alejandro Lariccia</p></footer>
</body>
</html>