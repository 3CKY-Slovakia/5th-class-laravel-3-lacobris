<?
require("class.phpmailer.php");


	//form validation vars
	$formok = true;
	$errors = array();
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
	
	//form data
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


$mail = new PHPMailer();

$mail->IsSMTP();                                 		 	// send via SMTP
$mail->Host     = "smtp.yourdomain.com"; 				 	// SMTP server - or mail.yourdomain.com
$mail->SMTPAuth = true;    								 	// turn on SMTP authentication
$mail->Username = "noreply@yourdomain.com"; 			    // Noreply address on your sevrer
$mail->Password = "noreply-password";						// Noreply's Password

$mail->From     = "noreply@yourdomain.com";					// Noreply address on your sevrer - Again
$mail->AddAddress("your-address@domain.com");			  	// Your Adress Here
$mail->Subject  =  "New mail from CREXIS !";
$mail->IsHTML(true);  
$mail->CharSet = 'UTF-8';
$mail->Body     =  "<p>You have recieved a new message from the enquiries form on your website.</p>
					  <p><strong>Name: </strong> {$name} </p>
					  <p><strong>Email Address: </strong> {$email} </p>
					  <p><strong>Subject: </strong> {$subject} </p>
					  <p><strong>Message: </strong> {$message} </p>
					  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

if(!$mail->Send())
{
   echo "Mail Not Sent <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Mail Sent";


?>
