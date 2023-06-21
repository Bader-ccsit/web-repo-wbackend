<?php
    if(isset($_POST['reset'])){  //when clicked reset is set
        $email = $_POST['email'];
    }
    else{
        exit();    //if reset is not set exit program
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'bador459@gmail.com';                     //SMTP username
        $mail->Password   = 'kqnqfifnelgrriio';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS before 465`
    
        //Recipients
        $mail->setFrom('bador459@gmail.com', 'Admin');
        $mail->addAddress($email);     //Add a recipient
        
        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = 'To reset your password click <a href="http://localhost/Login/change_password.php?code='.$code.'">here </a>. </br> Reset your password in a day.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $conn  = new mySqli('localhost', 'Bader', 'admin', 'login_sample_db');

        if($conn->connect_error){
            die('Could not connect to the database.');
        }

        $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

        if($verifyQuery->num_rows){
            $codeQuery = $conn->query("UPDATE users SET code = '$code' WHERE email = '$email'");
            
            $mail->send();
            echo 'Message has been sent, check your email';
        }

        $conn->close(); //close database
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    
?>