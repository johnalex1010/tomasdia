<?php
require_once 'config/config.php';
require_once 'config/config.database.php';
require_once 'models/model.functions.php';
require_once 'models/model.tn.php';


// ENVIAR CORREO ==============================================================
/*
Primero, obtenemos el listado de e-mails
desde nuestra base de datos y la incorporamos a un Array.
*/
require("datos.php");
$array = array($profesionales, $prensa);

/* 
Incluimos el PHPMailerAutoload, que se encarga de incorporar 
a nuestro código, todos los archivos necesarios para utilizar la librería.
Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
*/

require("PHPMailerAutoload.php"); 

$mail = new PHPMailer;

// Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
$mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
$mail->Host = $HostSMTP; // El Host de Gmail
$mail->Port = $puerto;  // El puerto que Mandrill nos indica utilizar
$mail->SMTPAuth = $autenticacion; // Indicamos que vamos a utilizar auteticación SMTP       
$mail->Username = $user; // Nuestro usuario en Gmail
$mail->Password = $pass; // Nuestro password en Gmail 
$mail->SMTPSecure = $cifrado; // Activamos el cifrado tls (también ssl)

// Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
$mail->CharSet = 'UTF-8';
$mail->From = $correoContacto; // Nuestro correo electrónico
$mail->FromName = 'Universidad Santo Tomás'; // El nombre de nuestro sitio o proyecto
$mail->IsHTML(true); // Indicamos que el email tiene formato HTML                      
$mail->Subject = "Tomás del día ED".$noticiadia['edicion'].""; // El asunto del email
$mail->Body = "<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title></title>
</head>
<body style='margin: 0; font-family: sans-serif;'>
	<div align='center' style=' margin: 0 auto; width: 950px;'>
		<!-- Cabecera, edición-->
		<table style='width: 100%;'>
			<tr>
				<td width='100%;'>
					<img src=''https://tomasnoticias.usta.edu.co/dia/public/images/header.png' alt='' style=' margin: 0 auto; border: 0; width: 100%;'>
				</td>
			</tr>
			<tr>
				<td style='text-align: right; padding: 32px 0px; font-size: 14px; color: #333231'>Edición n.º ".$noticiadia['edicion']." - ".fecha($noticiadia['fecha'])."</td>
			</tr>			
		</table>
		
		<!-- Contenido: titulo,  parrafo,  img -->
		<table style='width: 100%;'>
<!-- 			<tr>
				<td colspan='2' style='text-align: center; color: #333231'></td>
			</tr> -->
			<tr>
				<td width='50%;' style='padding: 16px;'>
					<h2 style='color: #00B6E5; margin-bottom: 16px; font-size: 28px;  text-align: left;'>".$noticiadia['titulo']."</h2>
					<p style='margin-top: 16px; color: #333231; font-size: 18px; text-align: justify;'>".$noticiadia['parrafo']."</p>
				</td>
				<td width='50%;'>
					<img src='https://tomasnoticias.usta.edu.co/dia/public/images/noticias/".$noticiadia['imagen']."' alt='".$noticiadia['imagen']."' width='85%;' style='display:block;margin: 16px auto; border-radius: 130px 3px 3px 3px;'>
				</td>
			</tr>
		</table>

		<!-- BTNS -->
		<table style=' width: 100%; margin-top: 50px;' >
			<tr >
				<td style='text-align: center;'>
					<a href='".$noticiadia['link']."' target='_blank' style='background: #002D5A; padding: 16px; color: #fff; display: inline-block; text-decoration: none; border-radius: 3px;' >Ver noticia completa</a>
				</td>
			</tr>
			<tr>
				<td style='text-align: center;'>
					<p style='margin-top: 16px; font-size: 14px; color: #333231'>Si no visualiza correctamente este contenido, haga <a href='https://tomasnoticias.usta.edu.co/dia/' target='_blank' style='color:#002D5A'> click aquí</a></p>
				</td>
			</tr>
		</table>

		<!-- footer -->
		<table style=' width: 100%; margin-top: 16px; background: #F1F3F8; padding: 16px 0px;' >
			<tr>
				<td width='' style='padding: 16px; text-align: left;'>
					<img src='https://www.usta.edu.co/footer/images/Acred_Multicampus_USTA.png' alt='' width='80%;'>
				</td>
				<td width='' style='padding: 16px; text-align: center;'>
					<img src='https://www.usta.edu.co/footer/images/QS_Stars_USTA.png' alt='' width='80%;'>
				</td>
				<td width='' style='padding: 16px; text-align: right;'>
					<img src='https://www.usta.edu.co/footer/images/Icontec_IQNet_USTA.png' alt='' width='80%;'>
				</td>
				<td width='' style='padding: 16px; text-align: center;'>
					<img src='https://www.usta.edu.co/footer/images/Acred_Inter_USTA.png' alt='' width='80%;'>
				</td>
			</tr>
		</table>
		<table style=' width: 100%;background: #F1F3F8' >
			<tr>
				<td style='width: 33.33%; text-align: center;'>
					<h3 style='color: #5C5454;'>SÍGUENOS</h3>
					<a href='' style='text-decoration: none;' target='_blank'>
						<img src='https://tomasnoticias.usta.edu.co/dia/public/images/redes/facebook.png' alt='facebook'>
					</a>
					<a href='' style='text-decoration: none; margin: 0 16px;' target='_blank'>
						<img src='https://tomasnoticias.usta.edu.co/dia/public/images/redes/twitter.png' alt='twitter'>
					</a>
					<a href='' style='text-decoration: none;' target='_blank'>
						<img src='https://tomasnoticias.usta.edu.co/dia/public/images/redes/instagram.png' alt='instagram'>
					</a>
				</td>
				<td style='width: 33.33%; text-align: center;'>
					<nav style='text-align: center;'>
						<h3 style='color: #5C5454;'>Departamento de Comunicaciones</h3>
						 <p>Edificio Santo Domingo<br>Calle 52 n.º 7-11, piso 2<br>PBX: (57-1) 587 87 97, ext. 1131<br>Bogotá, Colombia<br><a href='' class='smoothscroll' target='_blank'>www.usta.edu.co</a></p>
					</nav>
				</td>
				<td style='width: 33.33%; text-align: center;'>
					<img src='https://tomasnoticias.usta.edu.co/dia/public/images/440.png' alt='Logo USTA 2020' width='70%;' style='display:block;margin: 16px auto;' />
				</td>
			</tr>
			<tr>
				<td colspan='3' style='padding: 32px;'>
					<hr style='border-color: #ccc;'>
					<p style='font-size: 12px; text-align: center; color: #5C5454;'>Universidad Santo Tomás<br><br>Este newsletter llega a ustedes por pertenecer a nuestra comunidad online y tener una cuenta en el servidor institucional. Las opiniones expresadas en este newsletter son de exclusiva responsabilidad del autor y no reflejan, necesariamente, los puntos de vista de la Universidad Santo Tomás.<br><br>Institución de Educación Superior, reconocida mediante Resolución 3645 del 06 de agosto de 1965 expedida por el Ministerio de Justicia Institución de Educación Superior sujeta a la inspección y vigilancia del Ministerio de Educación Nacional - SNIES 1704</p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>"; // El cuerpo de nuestro mensaje

// Recorremos nuestro array de e-mails.

foreach ($array as $email) {
  $mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
  $exito = $mail->Send(); // Realiza el envío =)
  $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
}


/*
===================
OJO
===================
Si no funcional el envio por favor revisar el php.ini
https://es.ourcodeworld.com/articulos/leer/46/como-solucionar-error-en-php-xampp-wampp-ssl-certificate-error-unable-to-get-local-issuer-certificate

*/
header('Location: '.URL);
?>