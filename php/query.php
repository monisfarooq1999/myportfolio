<?php
include ("dbcon.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if(isset($_POST['submitlead'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['services'];
    $message = $_POST['message'];
    $query = $pdocon->prepare("INSERT INTO `formsubmission`(`name`, `email`, `phone`, `services`, `message`) VALUES (:fsn,:fse,:fsp,:fss,:fsm)");
    $query->bindParam("fsn",$name);
    $query->bindParam("fse",$email);
    $query->bindParam("fsp",$phone);
    $query->bindParam("fss",$service);
    $query->bindParam("fsm",$message);
    $query->execute();
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'farooq.ayubi26@gmail.com';                     //SMTP username
        $mail->Password   = 'hoxxiclctrhqijpp';                  //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('noreply@monis.com', 'Monis Farooq');
        $mail->addAddress('farooq.ayubie@gmail.com');               //Name is optional
        $mail->addAddress($email, $name);     //Add a recipient

        //Content
        $mail->Subject = 'Thank You for your Submission';
        $mail->Body    = 'Dear ' . $name . ', I am glad to receive your query. I will connect with you as soon as possible. Confirmation: You have submitted following details. Name:' . $name . ', Email:'. $email . '<br>Phone:' . $phone . '<br>Service:' . $service . '<br>Message:' . $message;
    
        $mail->send();
        echo '<script>alert("Form has been sent")</script>';
    } catch (Exception $e) {
        echo "<script>alert('Form Confirmation Email could not be sent. Mailer Error: {" . $mail->ErrorInfo . "}')</script>";
    }
}
?>