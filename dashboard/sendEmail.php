<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '..\src/Exception.php';
require '..\src/PHPMailer.php';
require '..\src/SMTP.php';

if(isset($_POST['submit'])){
	
	$mail = new PHPMailer(true);

	try {
		$mail->SMTPDebug = 0;                                      
		$mail->isSMTP();                                           
		$mail->Host       = 'smtp-mail.outlook.com';                   
		$mail->SMTPAuth   = true;                            
		$mail->Username   = 'kintor@spsejecna.cz';                
		$mail->Password   = 'secret';                       
		$mail->SMTPSecure = 'tls';      

		                       
		$mail->Port       = 587; 

		$mail->setFrom('kintor@spsejecna.cz', 'Crypto Heaven Server');          
		$mail->addAddress('kintormaksim@gmail.com');

		$mail->isHTML(true);                                 
		$mail->Subject = 'User Issue';
		$mail->Body    = 'User with email: '.$_POST['userIssueEmailInput'].'<br><br>Sent message:<br>'.$_POST['userIssueMessageInput'];
		$mail->AltBody = 'User with email: '.$_POST['userIssueEmailInput'].'\n\nSent message:\n'.$_POST['userIssueMessageInput'];
		$mail->send();
		//echo "Mail has been sent successfully!";
		echo '<script>alert("Email sent successfully")</script>';
		echo "<script>setTimeout(function(){ window.location.href = 'contactUs.php'; }, 0);</script>";
		exit();

		
	} catch (Exception $e) {
		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}else{
	//echo '<script>alert("Email was not sent")</script>';
	//echo "<script>setTimeout(function(){ window.location.href = 'contactUs.php'; }, 0);</script>";
	header('Location: contactUs.php');
	exit();
}
?>

