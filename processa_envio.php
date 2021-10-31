<?php
	require_once 'bibliotecas/PHPMailer/Exception.php';
	require_once 'bibliotecas/PHPMailer/OAuth.php';
	require_once 'bibliotecas/PHPMailer/PHPMailer.php';
	require_once 'bibliotecas/PHPMailer/POP3.php';
	require_once 'bibliotecas/PHPMailer/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	class Mensagem{
		private $para = null;
		private $assunto = null;
		private $mensagem = null;

		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
		public function mesagemValida(){
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
				return false;
			}else{
				return true;
			}
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	if(!$mensagem->mesagemValida()){
		echo 'Os dados não são válidos';
		die();
	}

	$mail = new PHPMailer(true);
	try {
			//Server settings
			$mail->SMTPDebug = 2;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'mailtesterphp2021@gmail.com';                     //SMTP username
			$mail->Password   = '@tester13579';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('mailtesterphp2021@gmail.com', 'Web Completo Remetente');
			$mail->addAddress('samuel.jesan2018@gmail.com', 'Samuel Jesus');     //Add a recipient
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Samuel testando aplicação';
			$mail->Body    = 'Oi. Eu sou o conteúdo do <strong>e-mail</strong>';
			$mail->AltBody = 'Oi. Eu sou o conteúdo do e-mail';

			$mail->send();
			echo 'Message has been sent';
	} catch (Exception $e) {
			echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.";
			echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}
