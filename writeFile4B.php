<?php


echo 'hola desde el writeFile4B.php';		

if (isset($_POST['contenidoArchivo']) && isset($_POST['nombreArchivo'])) {
		$contenidoArchivo = $_POST['contenidoArchivo'];
		$nombreArchivo = $_POST['nombreArchivo'];
        $handle = fopen($nombreArchivo, "w");
		fwrite($handle, $contenidoArchivo );
		fclose($handle);
}






?>

