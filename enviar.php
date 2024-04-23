<?php
     $mail="soporte.tecnico@soltecsas.com.co";
	 $nombre = $_POST["nombre"];
	 $correo = $_POST["correo"];
	 $asunto = $_POST["asunto"];
	 $mensaje = $_POST["mensaje"];
	 $thanks="index.html";
	 
	 $para="soporte.tecnico@soltecsas.com.co";
	 $message = "
	 nombre:".$nombre."
	 correo:".$correo."
	 asunto:".$asunto."
	 mensaje:".$mensaje."";
	 
	 $desde='From: '.$correo.' <soporte.tecnico@soltecsas.com.co';
	 ini_set(sendmail_from,'soporte.tecnico@soltecsas.com.co');
	 
	 
	 ini_set(sendmail_from,'soporte.tecnico@soltecsas.com.co'); 
	 mail($para,$asunto,$mensaje,$desde); 
	 
	 if (mail ($correo , "enviar" , $message)) Header ("location:$thanks");
	 
?>

