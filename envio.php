<?
$para = "contacto@la-zapateria.cl";
$nombre = $_POST["nombre"];
$asunto = "Enviado por $nombre: ".$_POST["asunto"];
$mensaje = $_POST ["mensaje"];
$de = $_POST["email"];

$headers = "MINE-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=iso-8859-1; \r\n";
$headers .= "Content-type: text/html; \r\n charset=UTF-8; \r\n";
$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";


if(mail($para,$asunto,$mensaje,$headers))
	echo"Enviado Correctamente";
else
	echo"Fallo en envio.";
?>
<a href="index.php"><button type="button" class="btn btn-primary">Volver</button></a>