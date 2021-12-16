<?php
require("/home1/rifbi7/public_html/PHPMailer-master/src/PHPMailer.php");
require("/home1/rifbi7/public_html/PHPMailer-master/src/SMTP.php");

$email = $_POST["email"];
$nome = $_POST["nome"];
$tel = $_POST["tel"];
$mensagem = $_POST["mensagem"];
$dataHora = date('d/m/Y \à\s H:i');

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
  $mail->setLanguage("pt-br");
 $mail->CharSet="utf-8";
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "emergecreative.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 
 $mail->Username = "contato@autoestufashekinah.com.br";
 $mail->Password = "@Shekinah123";
 $mail->AddAddress("contato@autoestufashekinah.com.br");
 
 $mail->Subject = "Solicitação de contato de $nome Realizado Através do Site";
 $mail->SetFrom("$email");
  
 require_once "contato-email.php";
 $mail->Body = "$corpo";
 
if(!$mail->Send()) {
        echo "<script>alert('Falhou em enviar o E-mail.');</script>";
        echo "<script>
	location= './contato.html';
	</script>";
    } else {
        echo "<script>alert('E-mail enviado com sucesso!');</script>";
	echo "<script>
	location= './contato.html';
	</script>";
    }
?>