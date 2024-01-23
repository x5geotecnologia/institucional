<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolher os dados do formulário
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $titulo = $_POST["subject"];
    $mensagem = $_POST["message"];

    // Configurar o destinatário e assunto do email
    $destinatario = "dmam9198@gmail.com";  // Substitua pelo seu endereço de email
    $assunto = "Nova mensagem do formulário de contato";

    // Construir o corpo do email
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Título: $titulo\n";
    $corpo_email .= "Mensagem:\n$mensagem";
    

    // Enviar o email
    mail($destinatario, $assunto, $corpo_email);

    // Redirecionar de volta para a página de contato
    header("Location: contact.html?success=true");
    exit();
}
?>