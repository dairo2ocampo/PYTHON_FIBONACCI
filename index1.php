<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de pruebas</title>
</head>

<body>
<?php
  
    $cadena = "<h1>dairo</h1>";
    echo filter_var($cadena,FILTER_SANITIZE_STRING);   

?>
    <form action="validar.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre">
    <br><input type="file" name="arch[]">
    <br><input type="file" name="arch[]">
    <br><input type="file" name="arch[]">
    <br><input type="submit" name="ok">
    </form>


	Mejorando el código ok

</body>
</html>