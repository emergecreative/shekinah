<?php
    $tipo = $_POST["tipo"];
    $dataHora = date('d/m/Y \à\s H:i');

    if($tipo=="contato"){
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        echo "
        <h2>$nome</h2><br>
        <h3>$telefone</h3><br>
        <h3>$email</h3><br>
        <p>$mensagem</p>
        <p>$tipo e $dataHora</p>
        ";
    }else{
        if($tipo=="newsletter"){
            $email = $_POST["email"];
            echo "
            Cadastro realizado com sucesso! Um link de ativação foi enviado para seu e-mail: $email.
            ";
        };
    };

?>
