<?php


     require 'includes/PHPMailer.php';
     require 'includes/SMTP.php';
     require 'includes/Exception.php';
     
     require 'vendor\autoload.php';

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;


     $mail = new PHPMailer();
     
     $mail->isSMTP();
     $mail->isHTML(True);
     
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth = "true";
     $mail->SMTPSecure = "ssl"; //if you are using 'tls' give port number as 587
     $mail->Port = "465";
     $mail->Username = "kookieisabubbledancer123@gmail.com";
     $mail->Password = "cdjihrlfwwrvncrn";
     $mail->Subject = "Hi $uemail";
     $mail->setFrom("kookieisabubbledancer123@gmail.com", 'kookie');
     $mail->Body ='Thanks for connecting';
     $mail->addAddress($uemail);
     
     if($mail->Send()) {
         echo "Email Sent!";
         header('location: getEmailid.php');
     } else {
         echo "Mail not sent!";
     }
     
     $mail->smtpClose();

?>