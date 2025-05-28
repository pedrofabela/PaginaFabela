<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Conexión a la base de datos
$servername = "localhost";
$username = "refac539_usr";
$password = "fabela20";
$dbname = "refac539_mensaje";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL (con declaración preparada para prevenir SQL injection)
$stmt = $conn->prepare("INSERT INTO tabla_mensaje (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.refaccionesfabela.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'web@refaccionesfabela.com';                     //SMTP username
    $mail->Password   = 'F@be2l@#20';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('web@refaccionesfabela.com','Refacciones Fabela');
    $mail->addAddress('ventas@refaccionesfabela.com.mx'); 
    $mail->addAddress('fabela_mauricio@hotmail.com');     //Add a recipient
 

    //Content

    $mensaje_pagina="Nombre del cliente: ".$_POST['nombre']."\n Correo:".$_POST['correo']." \n Tel: ".$_POST['telefono']." \n Mensaje: ".$_POST['mensaje'];

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nuevo contacto de cliente desde la pagina WEB';
    $mail->Body    = $mensaje_pagina;
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}







// Ejecutar la consulta
if ($stmt->execute()) {
    
    header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    exit();
} else {
    echo "Error al insertar el registro: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>