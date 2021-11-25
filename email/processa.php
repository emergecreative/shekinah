<?php
    
    error_reporting(E_ALL);

    /* Habilitar a exibição de erros */

    ini_set("display_errors",1);
    
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $tipo = $_POST["tipo"];
    $dataHora = date('d/m/Y \à\s H:i');
    
    require "../bat/phpmailer/class.phpmailer.php";
    $mail = new PHPMailer;

    $mail->setLanguage("pt-br");
    $mail->CharSet="utf-8";
    $mail->IsSMTP();
    $mail->Host = "emergecreative.com.br";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->Username = "site@edenconsultoria.com.br";
    $mail->Password = "pwdDan*10";
    $mail->From = "site@edenconsultoria.com.br";

    $mail->FromName = "Site Eden Consultoria";
    $mail->addAddress("contato@edenconsultoria.com.br");

    if($tipo="contato"){

        $titulo = "Solicitação de contato de $nome Realizado Através do Site";
        
        //$mail->addReplyTo($email);
        $mail->Subject = $titulo;
        $mail->isHTML(true);

        $body = "
            <div style='color: rgb(239,239,239); font-weight: 400;'>
            <strong>E-mail:</strong> $email <br>
            <strong>Telefone: </strong> $telefone <br><br>
            <strong>Mensagem:</strong> $mensagem <br>
            </div>";

        require_once "EmailTemplate/contato.php";

        $mail->Body = $corpo;
        
        if(!$mail->send()) {
            echo "A mensagem não pode ser enviada<br>
            Retornou mensagem de erro: <br>
            $mail->ErrorInfo
            ";
        }else{
            echo "Mensagem enviada com sucesso";
        }
    }else{
        //$mail->addReplyTo($email);
        
        $titulo = "Inscrição de $nome em Newsletter";
        
        $mail->isHTML(true);
        $mail->Subject = $titulo;

        $body = "
            <div style='color: rgb(239,239,239); font-weight: 400;'>
            <strong>E-mail:</strong> $email <br>
            <strong>Telefone: </strong> $telefone <br><br>
            </div>";

        require_once "newsletter/newsletter.php";

        $mail->Body = $corpo;
        
        if(!$mail->send()) {
            echo "Não foi possível inscrever-se.<br>
            Retornou mensagem de erro: <br>
            $mail->ErrorInfo";
        }else{
            echo "Cadastro realizado com sucesso! Um link de ativação foi enviado para seu e-mail: $email.";
        }
    }

?>