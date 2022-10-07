<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	
    $Email = $_POST["Email"];
    $name = $_POST["userName"];
    $mobileNo = $_POST["mobileNo"];
    $Code = $_POST["Code"];
    $msg = 'Hey '.$name.'. Your need to verify your Email. Your OTP is: '.$Code;
		
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = '21amtics445@gmail.com';                    
        $mail->Password   = 'rtftmtdzdltzosyr';                              
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;                                   


        $mail->setFrom('21amtics445@gmail.com', 'Website_name');
        $mail->addAddress($Email,$name);     
        $mail->addReplyTo('no-reply@gmail.com', 'No-reply');



        $mail->isHTML(true);     
        $mail->Subject = 'Email Verification';
        $mail->Body    = $msg;
        $mail->send();

    } 
    catch (Exception $e) {
        echo "Message could not be sent.<br><span class='detail'> Invalid mail ID or Mailer Error: " .$mail->ErrorInfo."</span>";
    }
?>
