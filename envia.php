<?php
    // Recupere os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $msg = $_POST['msg'];

    // Endereço de e-mail de destino e assunto
    $para = "rafaelam.cani@gmail.com";
    $assunto = "Coleta de dados";

    // Corpo do e-mail
    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$msg;

    // Cabeçalho do e-mail
    $cabecalho = "From: rafaelam.cani@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

    // Enviar e-mail
    mail($para, $assunto, $corpo, $cabecalho);

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso.");
    }else{
        echo("Houve um erro.");
    }


?>
