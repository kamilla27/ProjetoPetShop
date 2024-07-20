<?php
// Incluir autoload do Composer ou arquivos do PHPMailer manualmente
//require 'vendor/autoload.php'; // Se estiver usando Composer
require 'PHPMailer/PHPMailerAutoload.php'; // Se estiver usando PHPMailer manualmente

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Pegando os dados do formulário
$camponome = $_POST['nome'];
$campoemail = $_POST['email'];
$campotelefone = $_POST['telefone'];
$campotexto = $_POST['mensagem'];
$fixo = "aleir.web@gmail.com";
// Endereço de email para onde será enviado
$to = "kamilla.biologicas@gmail.com";

// Criar instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aleir.web@gmail.com'; // Seu endereço de e-mail do Gmail
    $mail->Password = 'kffl owbo bnar hbzq'; // Sua senha de App (não a senha do e-mail)
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Configurações do e-mail
    $mail->setFrom($fixo, 'Milla Biscoitos Amanteigados');
    $mail->addAddress($to);
    $mail->addReplyTo($fixo);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Contato de cliente';
    $mail->Body    = "<html><body>";
    $mail->Body   .= "<h1>Mensagem recebida de : $camponome --- Telefone: $campotelefone  Email: $campoemail</h1>";
    $mail->Body   .= "<p>$campotexto</p>";
    $mail->Body   .= "</body></html>";

    // Enviar e-mail
    $mail->send();
    echo "<script type='text/javascript'>
        alert('Email enviado com sucesso.');
        window.location.href = 'formulario-contato.html';
      </script>";
} catch (Exception $e) {
    echo "<script type='text/javascript'>
        alert('Falha no envio: {$mail->ErrorInfo}');
        window.location.href = 'formulario-contato.html';
      </script>";
}
?>