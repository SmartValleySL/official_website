<?php

$name = $_POST['cf-name'];
$email = $_POST['cf-email'];
$number = $_POST['cf-number'];
$company = $_POST['cf-company'];
$message = $_POST['cf-message'];


require '../MRMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = gethostbyname('smtp.zoho.com');
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hello@smartvalley.lk';                 // SMTP username
    $mail->Password = 'hello@sv119';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
	$mail->setFrom('hello@smartvalley.lk', 'Smart Valley Visitor Alert'); 
    $mail->addAddress('hello@smartvalley.lk', 'Smart Valley Visitor Alert');// Add a recipient
   
	
	$body = "<p><strong>Hello</strong>, You have received an enquiry from" .$name. "The message is" .$message. "You can contact this person via" .$phone. "</p>";
	
	
	
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'NEW SMART VALLEY VISITOR QUERY FROM ' .$name;
	
    $mail->Body    = '<center><strong><font size="5" color="Orange">NEW SMART VALLEY VISITOR QUERY</font></strong></center> <br><br>
	
					  <b>Visitor Name:</b> '.$name.' <br><br><hr><br> 
	                  <b>Message/Query:</b> '.$message.' <br><br><hr><br> 
					  <b>University / Company:</b> '.$company.' <br><br><hr><br> 
	                  <b>Contact Number:</b> '.$number.' <br><br><hr><br> 
	                  <b>Email Address:</b> '.$email.' <br><br><hr><br><br>
					  
                   <center> <i><font size="2" color="Green">  This is an automated message sent from Smart Valley.</font></i></center>';
	
    //$mail->AltBody = strip_tags($body);

    $mail->send();
	header("location: ../home.php#?msg");
     echo 'Message has been sent.';
} catch (Exception $e) {
   $msg = 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
		