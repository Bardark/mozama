<html>
<head>
	<meta charset="utf-8">
</head>
</html>
<?php
	$nombre = $_POST["nombreContacto"];
	$email = $_POST["correoContacto"];
	$mensaje = $_POST["mensajeContacto"];

	$para  = 'disiin@hotmail.com'.', ';
	$para .= 'contacto@mozama.com.mx';

	mail($para, $nombre, $mensaje, $email);
                    echo '<script language="javascript" type="text/javascript">
                        alert("¡¡Comentario enviado con éxito!!" );
                        document.location.href="index.php"
                    </script>';
                    ?>
