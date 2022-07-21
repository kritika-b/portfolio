    <?php
    include('dbconn.php');

    // if(isset($_POST['submit'])) {
    //     if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $uname=$_POST['name'];
            $uemail=$_POST['email'];
            $umessage=$_POST['message'];
            $sql ="INSERT INTO getintouchdetails(username, email, message) VALUES ('$uname', '$uemail','$umessage')";
            mysqli_query($conn,$sql);

            $var1 = 1;
            $var2 = 1;
                        
            require 'includes/PHPMailer.php';
            require 'includes/SMTP.php';
            require 'includes/Exception.php';
            
            require 'vendor\autoload.php';
    
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            if($var1 == 1) {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->isHTML(True);
                
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = "true";
                $mail->SMTPSecure = "ssl"; //if you are using 'tls' give port number as 587
                $mail->Port = "465";
                $mail->Username = "kookieisabubbledancer123@gmail.com";
                $mail->Password = "cdjihrlfwwrvncrn";
                $mail->setFrom("kookieisabubbledancer123@gmail.com", 'kookie');
                $mail->Subject = "Hi Kritika";
                $mail->Body ="Hi Kritika, Just now with this $uemail seems to be interested in your profile!";
                $mail->addAddress("kookieisabubbledancer123@gmail.com");
                
                if($mail->Send()) {
                    echo "Email Sent!";
                } else {
                    echo "Mail not sent!";
                }
            }

            if($var2 == 1) {
                $mail = new PHPMailer();
            
                $mail->isSMTP();
                $mail->isHTML(True);
                
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = "true";
                $mail->SMTPSecure = "ssl"; //if you are using 'tls' give port number as 587
                $mail->Port = "465";
                $mail->Username = "kookieisabubbledancer123@gmail.com";
                $mail->Password = "cdjihrlfwwrvncrn";
                $mail->setFrom("kookieisabubbledancer123@gmail.com", 'kookie');
                $mail->Subject = "Hi $uemail";
                $mail->Body = "Hi, Thanks for connecting!!";
                $mail->addAddress($uemail);
                
                if($mail->Send()) {
                    header('location: mailMe.php');
                    echo "Email Sent!";
                } else {
                    echo "Mail not sent!";
                }
                $mail->smtpClose();
            }
            
    ?>