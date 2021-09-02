<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de pruebas con un cambio</title>
</head>

<body>
<?php
  /*
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

<?php
*/
	$archivo = fopen("../../archivo.txt",'r');
	echo fread($archivo,filesize('../../archivo.txt'));
	fclose($archivo);
	echo '<br><br><h3>';
	$archivo = fopen("../../archivo.txt",'r');
	while(!feof($archivo)):
	    echo fgets($archivo).'<br>';
	endwhile;
	fclose($archivo);
	echo '</h3>';
	echo 'LEYENDO CARACTER POR CARACTER<h1>';	
	$archivo = fopen("../../archivo.txt",'r');
    while($car = fgetc($archivo)):
        echo $car.' &nbsp; ';
    endwhile;
	fclose($archivo);
	echo '</h1>';	
	echo 'CREANDO ARCHIVO<h1>';		
	$narchivo = "archivonuevo.txt";
	$conte = "Este es el contenido";

	$conte2 = "bjando de nivel";
	
	$archivo2 = fopen($narchivo,'w');
//	$conconte = fwrite($archivo2,$conte);	//  solo e spara que en $conconte se guarde el numero de bytes
	fwrite($archivo2,$conte.PHP_EOL);
	fwrite($archivo2,$conte2);
	
	fclose($archivo2);
	

	
?>


</body>
</html>