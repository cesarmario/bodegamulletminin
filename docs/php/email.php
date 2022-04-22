<?PHP
	error_reporting(E_ALL ^ E_NOTICE); 
    $to = "info@industriamym.com.ar";
	$from = $_REQUEST['email'];
	$mail = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];

	$headers = "From: ". $mail . "\r\n";
	$headers .= "Reply-To: ". $mail . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Mensaje enviado desde la Web";

    $logo = "https://industriamym.com.ar/es/assets/images/logo/logo.png";
    $link = "industriamym.com.ar";

	$body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>eMail enviado desde la Web</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tr><td style='border:none;'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt='Agroindustria Mulet y Maurin'></a>";
	$body .= "</td></tr>";
	
	$body .= "<tr><td style='border:none;'>";
	$body .= "<strong>Nombre:</strong> {$name}";
	$body .= "</td></tr>";
	
	$body .= "<tr><td style='border:none;'>";
	$body .= "<strong>Email:</strong> {$mail}";
	$body .= "</td></tr>";
	
	$body .= "<tr><td style='border:none;'>";
	$body .= "{$message}";
	$body .= "</td></tr>";
	
	$body .= "</table>";
	$body .= "</body></html>";

    $result = '';
	if (mail ($to, $subject, $body, $headers)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>';
		$result .= '¡Gracias! estaremos en contacto';
		$result .= '</div>';

		echo $result;
		die();
	}
	
	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Algo salió mal durante el envío de este mensaje. Por favor, inténtelo de nuevo más tarde';
	$result .= '</div>';

	echo $result;


	?>
	<script> //location.replace("index.html#contacto"); </script>