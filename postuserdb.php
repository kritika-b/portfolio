<?php
include('dbconn.php');

if(isset($_POST['submit'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
         $uname=$_POST['name'];
         $uemail=$_POST['email'];
         $umessage=$_POST['message'];
         $sql ="INSERT INTO `form`(`user`, `email`, `message`) VALUES ('$uname', '$uemail','$umessage')";
         $run = mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($run) {
            echo "form submitted successfully";
            echo $uname;

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
                header('location: mailMe.php');
            } else {
                echo "Mail not sent!";
            }
            
            $mail->smtpClose();

        }
        else {
            echo "form not submitted";
        }
    }
    else {
            echo "all fields required";
    }
}


 ?>