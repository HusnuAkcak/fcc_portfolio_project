<?php
require("class.phpmailer.php");
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 465
$mail->IsHTML(true);s
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";

$mail->Username = "husnuakcak.info@gmail.com"; // Mail adresi
$mail->Password = "info.husnuakcak"; // Parola
$mail->SetFrom($mail->Username, 'Husnu AKCAK'); // Mail adresi

$mail->AddAddress("husnuakcak.info@gmail.com"); // Gönderilecek kişi

$mail->Subject = $_POST["subject"];
$mail->Body = "$name<br />$email<br />$subject<br />$message";

if(!$mail->Send()){
                echo "Mailer Error: ".$mail->ErrorInfo;
} else {
                echo "Message has been sent";
}

?>
