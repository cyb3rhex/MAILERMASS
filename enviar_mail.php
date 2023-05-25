<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validar y escapar los datos del formulario
  $from = filter_var($_POST["from"], FILTER_SANITIZE_EMAIL);
  $subject = htmlspecialchars($_POST["subject"], ENT_QUOTES);
  $message = htmlspecialchars($_POST["message"], ENT_QUOTES);

  // Verificar si los datos son válidos antes de procesarlos
  if (filter_var($from, FILTER_VALIDATE_EMAIL) && !empty($subject) && !empty($message)) {

    // Ejemplo de envío de correo utilizando la función mail() de PHP
    $to = "destinatario@example.com";
    $headers = "From: $from" . "\r\n";
    $headers .= "Reply-To: $from" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $email_body = "
    <h3>Información de contacto</h3>
    <p><strong>De:</strong> $from</p>
    <p><strong>Asunto:</strong> $subject</p>
    <p><strong>Mensaje:</strong></p>
    <p>$message</p>";
    $mail_sent = mail($to, $subject, $email_body, $headers);

    if ($mail_sent) {
      echo "El correo electrónico ha sido enviado con éxito.";
    } else {
      echo "Ha ocurrido un error al enviar el correo electrónico.";
    }
  } else {
    echo "Por favor, completa todos los campos correctamente.";
  }
}
