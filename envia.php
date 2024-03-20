<?php
    // Capturando os dados do usuario no formulario.

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $texto = addslashes($_POST['texto']);

    $para = "cc.santana.js@gmail.com";

    $assunto = "Contatos - Portfólio";

    $corpo = "nome: ".$nome."\n"."email: ".$email."\n"."celular: ".$celular."\n"."texto: ".$texto;

    $cabeca = "From: cc.santana.js@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }
?>