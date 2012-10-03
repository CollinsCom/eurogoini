<?php
	require("class.phpmailer.php");
	extract($_POST);



	$bood='';
	$bood.= '<body>';
	$bood.= '<h3>Buenas noticias: alguien quiere contactar con Eurogoini.</h3>';
	$bood.= '<p>';
	$bood.= '<strong>De:</strong> '.$nombre.'<br />';
	if($medio != ''){ $bood.= '<strong>Domicilio:</strong> '.$domicilio.'<br />'; }
	$bood.= '<strong>Correo:</strong> '.$mail.'<br />';
	if($medio != ''){ $bood.= '<strong>Telefono:</strong> '.$telefono.'<br />'; }
	if($medio != ''){ $bood.= '<strong>Celular:</strong> '.$tel.'<br />'; }
	$bood.= '<strong>Mensaje:</strong> '.$comentario.'<br />';
	if($medio != ''){ $bood.= '<strong>&iquest;Por qu&eacute; medio se enter&oacute; de nosotros?:</strong> '.$medio.'<br /><br />'; }
	$bood.= '</p>';
	$bood.= '</body>';

	$mailer = new phpmailer ();
	
	$mailer -> CharSet = "UTF-8";
	$mailer -> From = $mail;
	$mailer -> FromName = $nombre;
	$mailer -> AddAddress ('eurogoini@eurogoini.com');
	//$mailer -> AddAddress ('luis@collinscom.com');
	$mailer -> AddBCC('jorge.rojas@collinscom.com');
	$mailer -> Subject = "Mensaje enviado del formulario de contacto de Eurogoini";
	$mailer -> Body = $bood;
	$mailer -> IsHTML (true);



	$exitoso = $mailer -> Send ();
	
	//echo $exitoso;exit;

	if($exitoso){
		header ("Location: respuesta.php");
	}else{
		header ("Location: contacto.php");
	}
?>
