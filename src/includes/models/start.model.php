<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/vendor/phpmailer/Exception.php';
require 'includes/vendor/phpmailer/PHPMailer.php';
require 'includes/vendor/phpmailer/SMTP.php';

class Start{
	
	public static function random($var, $name){
		global $db;
		
        $string = "";
        $chaine = "SquadHealthCheckByNicolas123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$var; $i++){
            $string .= $chaine[rand()%strlen($chaine)];
        }
		
		$data = [
			'name' => $name,
			'token' => $string,
			'status' => 0,
		];
		$sql = "INSERT INTO shc_session (name, token, status) VALUES (:name, :token, :status)";
		$stmt= $db->prepare($sql);
		$stmt->execute($data);
		
        return $string;
    }
	
	public static function sendMail($team, $token){

		$mail = new PHPMailer(true);

		try {
		    $mail->isSMTP();
		    $mail->Host       = 'mailhog';
		    $mail->SMTPAuth   = true;
		    $mail->Username   = '';
		    $mail->Password   = '';
		    $mail->Port       = 1025;

		    $mail->setFrom('noreply@example.net', 'Squad health check App');
		    $mail->addAddress('coach@example.net', 'Coach');
		    $mail->addReplyTo('noreply@example.net', 'Squad health check App');

		    $mail->Subject = "Squad health check team : ".$team;
		    $mail->Body    = "<html><head></head><body>Hi, <br /><br />there is an email from Squad health check App.<br /><br />  <i>Team : <b>".$team."</b> , <br />Token : <b>".$token."</b></i><br /><br />Bye.</body></html>";
		    $mail->AltBody = "Hi, there is an email from SHC App. Team : ".$team." , Token : ".$token;

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		
	}
	
}

?>
