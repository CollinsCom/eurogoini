<?php
	$destino = "eurogoini@eurogoini.com";
	$fecha = date("d-M-y H:i");	
	$titulo = "Formulario de contacto ($fecha)";
	$mensaje.="<strong>Informacion general</strong><br><br>\n";
	
	$mensaje.= "<strong>Nombre:</strong>".$_POST['nombre']."<br>\n";
	$mensaje.= "<strong>Domicilio:</strong> ".$_POST['domicilio']."<br>\n";
	$mensaje.= "<strong>eMail:</strong> ".$_POST['mail']."<br>\n";
	$mensaje.= "<strong>Telefono:</strong> ".$_POST['telefono']."<br>\n";
	$mensaje.= "<strong>Celular:</strong> ".$_POST['celular']."<br>\n";
	$mensaje.= "<strong>Comentarios:</strong> ".$_POST['recomendado']."<br>\n";
	$mensaje.= "<strong>Medio por el cual se entero de nosotros:</strong> ".$_POST['medio']."<br>\n";
	
	$header = "From: ".$_POST["mail"]."\n";
	$header = "From: ".$_POST["mail"]."\nReply-To: ".$_POST["mail"]."\n";
	$header .= "X-Mailer:PHP/".phpversion()."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/html";
	mail($destino, $titulo, utf8_decode($mensaje), $header);
    echo"<script language='javascript'>document.location.href='respuesta.html';</script>";
?>