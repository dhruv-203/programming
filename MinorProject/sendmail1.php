<?php
 // B.tech Computer Science and Engineering
  // Dhruv Patel 
  // 202103103510445
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'Exception.php';
	require 'PHPMailer.php';
	require 'SMTP.php';
	
    $msg = ' Your OTP to reset Password. Your OTP is: '.$_SESSION['otp'];
		
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
        $mail->addAddress($_SESSION['email'],'');     
        $mail->addReplyTo('no-reply@gmail.com', 'No-reply');



        $mail->isHTML(true);     
        $mail->Subject = 'Email Verification';
        $mail->Body    = $msg;
        $mail->send();
        header('Location:confirmotp.php');
    } 
    catch (Exception $e) {
        echo "Message could not be sent.<br><span class='detail'> Invalid mail ID or Mailer Error: " .$mail->ErrorInfo."</span>";
    }
?>
