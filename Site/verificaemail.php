<?php
$camponome=$_POST['nome'];
$campoemail=$_POST['email'];
$campotelefone=$_POST['telefone'];
$campotexto = $_POST['mensagem'];

$to = "kamilla.biologicas@gmail.com";
$subject = "Contato de cliente";
$message = "<html><body>";
$message .= "<h1>Mensagem recebida de :".$camponome."\n Telefone: ".$campotelefone</h1>";
$message .= $campotexto;
$message .= "</body></html>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: ".$campocontato."\r\n";
$headers .= "Reply-To: ".$campocontato."\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
     echo "<script type='text/javascript'>
        alert('Email enviado com sucesso.');
        window.location.href = 'formulario-contato.html';
      </script>";
} else {
    echo "<script type='text/javascript'>
    alert('Falha no envio.');
    window.location.href = 'formulario-contato.html';
  </script>";
}


?>