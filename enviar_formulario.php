<?php
$recaptcha_secret = "6Lf-b4ApAAAAAHi-HHoGx0LbEugaT68D6yud9k9d";
$recaptcha_response = $_POST['g-recaptcha-response'];

$recaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$recaptcha = json_decode($recaptcha);

if ($recaptcha->success == true) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $to = "juangm598@gmail.com"; 
    $subject = "Nuevo mensaje desde juangrandio.com de $nombre";
    $headers = "From: $email";

    if (mail($to, $subject, $mensaje, $headers)) {
        header("Location: contacto.html");
        exit();
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Error: Por favor, completa el reCAPTCHA.";
}
?>
