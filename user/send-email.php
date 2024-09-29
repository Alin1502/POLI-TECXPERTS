<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/PHPMailer/src/Exception.php';
require '../PHPMailer/PHPMailer/src/PHPMailer.php';
require '../PHPMailer/PHPMailer/src/SMTP.php';

if(isset($_POST["send"])){

    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='//your email here//';
    $mail->Password='//smtp password here//';    
    $mail->SMTPSecure='tls';
    $mail->Port=587;
    
    $mail->setFrom('cristix231@gmail.com');
    $mail->addAddress('cristix231@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = "Info: " . $_POST["username"] . " ". $_POST["issue"] . " ". $_POST["email"];
    $mail->Body = $_POST["message"];
    $mail->send();
    echo "<div class='alert alert-success' style='text-align: center; font-size:20px'>
    Thank you for contacting us! We will get back to you as soon as possible.
    </div>";
}

?> 