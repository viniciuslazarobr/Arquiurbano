<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Seu e-mail
    $to = "viniciuslazaro@live.com"; // Substitua pelo seu e-mail

    // Assunto do e-mail
    $subject = "Novo contato de $name";

    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Mensagem:\n$message\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Redirecionar para página de sucesso (ou mostrar uma mensagem)
        echo "Mensagem enviada com sucesso!";
    } else {
        // Se houver erro no envio
        echo "Falha ao enviar a mensagem. Tente novamente mais tarde.";
    }
}
?>
