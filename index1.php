<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de pruebas con un cambio</title>
</head>

<body>
<?php
    $cadena = "<h1>dairo</h1>";
    echo filter_var($cadena,FILTER_SANITIZE_STRING);
?>
	<div align="center"><h1>FORMULARIO INICIAL</h1></div>
    <form action="validar.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre">
    <br><input type="file" name="arch[]">
    <br><input type="file" name="arch[]">
    <br><input type="file" name="arch[]">
    <br><input type="submit" name="ok">
    </form>


	Mejorando el c�digo ok

</body>
</html>