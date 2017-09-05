<?php
/**
 * Created by PhpStorm.
 * User: Luca Vimercati
 * Date: 12/05/2016
 * Time: 18:54
 */

function sendMail($name, $email, $body) {
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 2;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.malafronte.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'service@malafronte.net';                 // SMTP username
    $mail->Password = '123mouseUp';                           // SMTP password
    $mail->SMTPSecure = 'starttls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom($email, $name);
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->addAddress("mouseup@issgreppi.it");
    $mail->Subject = 'Mail inviata da www.mouseup.it';

    $msg = $body;
    $msg = wordwrap($msg, 70);
    $mail->Body = $msg;
    $mail->AltBody = $msg;
    if (!$mail->send()) { ?>
        <script>
            alert("Messaggio non inviato\n" + <?php $mail->ErrorInfo ?> );
        </script>
    <?php } else { ?>
        <script>
            alert("Messaggio inviato");
        </script>
    <?php }
}
?>