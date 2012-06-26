<?php 
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$destino = "armando@laboratoriom.com, klinsmannfvg@gmail.com, armandosanchezr@gmail.com, manuel@ecoplagveracruz.com, miguel@ecoplagveracruz.com";
	$asunto = "Formulario de Contacto";
   	$encabezados = "MIME-Version: 1.0\n";
	$encabezados .= "Content-type: text/html; charset=iso-8859-1 \n";
	$encabezados .= "From: $email \n";
	$encabezados .= "Reply-To: $email \n";
	$cuerpo = "<H4>Formulario de Contacto</H4><br><br>
<B>Nombre</B>: $nombre  <br>
<B>e-mail</B>: $email <br>
<B>Telefono</B>: $telefono <br>
<B>Comentarios</B>: $comentarios  <br>

";
	$cuerpo = wordwrap($cuerpo, 72);
	mail($destino, $asunto, $cuerpo, $encabezados) or die ("&mensaje=No se pudo procesar el formulario");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>Sus datos han sido enviados.</p>
<p>Muchas gracias.</p>
</body>
</html>
