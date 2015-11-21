<?php

// using PHPMailer with GMAIL

include("php/phpmailer/class.phpmailer.php");
include("php/phpmailer/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html'); //corpo do email

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "seu@gmail.com";  // GMAIL username
$mail->Password   = "";               // GMAIL password

$mail->From       = "";
$mail->FromName   = "E2 Framework";
$mail->Subject    = "Confirmação do Cadastro ";
$mail->AltBody    = "texto do corpo"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("seuemail@gmail.com","No-Reply"); // e-Mail que envia a confirmação
$mail->AddAddress("seuemail@gmail.com","mail"); // quem vai receber o e-Mail de confirmação

$mail->IsHTML(true); // Enviar o HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

