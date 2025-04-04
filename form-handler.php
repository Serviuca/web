<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $email_from = 'info@webcindario.com';
    $email_subject = 'De Serviuca';

    $email_body = "User name: $name.\n".
                  "User email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "Message: $message.\n";

    $to = 'ucaservi@gmail.com';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contacto.html");
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Acceso no permitido.";
}
?>


