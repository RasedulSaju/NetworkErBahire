<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	
	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) ){

		// $name=$_POST['name'];
		// $email=$_POST['email'];
		// $message=$_POST['message'];

		$var1=$_POST['name'];
        $var2=$_POST['email'];
        $var3=$_POST['message'];

		echo '$var1';
		echo '$var2';
		echo '$var3';

		require 'phpmailerlib/Exception.php';
		require 'phpmailerlib/PHPMailer.php';
		require 'phpmailerlib/SMTP.php';


	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// SMTP::DEBUG_OFF = off (for production use)
	// SMTP::DEBUG_CLIENT = client messages
	// SMTP::DEBUG_SERVER = client and server messages
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//---------------------------------------------------------------------------------------------------------
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = 'arahman142107@bscse.uiu.ac.bd';

	//Password to use for SMTP authentication
	$mail->Password = '';

	//Set who the message is to be sent from
	$mail->setFrom('arahman142107@bscse.uiu.ac.bd', 'Alif');

	//Set who the message is to be sent to
	$mail->addAddress('$var2', '$var1');
	//----------------------------------------------------------------------------------------------------------

	//Set the subject line
	$mail->Subject = 'Network er Bahire theke MAIL esheche!!!';
	
	$mail->Body = '$var3';
	
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message sent!';
	}
	}
	else{
	?><script>window.location.assign('index.php')</script>
	<?php
}
?>