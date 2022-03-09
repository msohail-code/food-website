<?Php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'email/autoload.php';


if (isset($_POST['email'])) {
	$user_email = $_POST['email'];
	$user_name = $_POST['name'];
	$user_subject = $_POST["subject"];
	$user_message = $_POST["message"];


	$mail = new PHPMailer(true);

	try {
	    /* 
	    $mail->SMTPDebug = 2;                                       
	    $mail->isSMTP();                                            
	    $mail->Host       = '';                    
	    $mail->SMTPAuth   = true;                             
	    $mail->Username   = '';                 
	    $mail->Password   = '';                        
	    $mail->SMTPSecure = 'tls';                              
	    $mail->Port       = 587;  
	    

	    $mail->setFrom('', ' ' ); 
	    */
	    $mail->CharSet = "UTF-8";

	    $mail->From = $user_email;
	    $mail->FromName = $user_name;
	    // $mail->addAddress("Clearbusiness.adrianvenoin@gmail.com");
	    $mail->addAddress("tutstricks@gmail.com");

	    
	    

	    
	    $mail->isHTML(true);                                  
	    $mail->Subject = $user_subject;
	    $mail->Body    = $user_message;
	   // $mail->AltBody = 'Body in plain text for non-HTML mail clients';
	    echo "we are here";
	    
	    if($mail->send())
	    {
	    	echo "Thanks for contacting us, We will get back to you soon";
	    }
	  
	    

	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}


	    
	
}

?>