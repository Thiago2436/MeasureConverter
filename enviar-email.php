<?php

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Coleta os dados do formulário
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Verifica se o e-mail é válido
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    // Monta o assunto do e-mail
    $subject = "Contato via formulário: " . $name;
    
    // Monta o corpo do e-mail
    $body = "Nome: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message";
    
    // Define o cabeçalho do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Envia o e-mail
    mail("thiagomartins.florestal@gmail.com", $subject, $body, $headers);
    
    // Exibe uma mensagem de sucesso
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "E-mail inválido!";
  }
}

?>
