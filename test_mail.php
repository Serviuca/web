<?php
if (mail("tu_correo@gmail.com", "Prueba de correo", "Este es un mensaje de prueba", "From: prueba@tudominio.com")) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
