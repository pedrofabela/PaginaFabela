<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

function redirectToContact(array $params = []): void
{
    $query = http_build_query($params);
    $location = 'contact.php' . ($query !== '' ? ('?' . $query) : '');
    header('Location: ' . $location);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    redirectToContact(['error' => 'method']);
}

$nombre = trim((string) ($_POST['nombre'] ?? ''));
$correo = trim((string) ($_POST['correo'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$esHumano = (string) ($_POST['esHumano'] ?? 'on');

if ($nombre === '' || $correo === '' || $telefono === '' || $mensaje === '') {
    redirectToContact(['error' => 'validation']);
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    redirectToContact(['error' => 'validation']);
}

if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $telefono)) {
    redirectToContact(['error' => 'validation']);
}

if ($esHumano !== 'on') {
    redirectToContact(['error' => 'validation']);
}

$dbHost = getenv('FABELA_DB_HOST') ?: 'localhost';
$dbUser = getenv('FABELA_DB_USER') ?: 'refac539_usr';
$dbPass = getenv('FABELA_DB_PASS') ?: 'fabela20';
$dbName = getenv('FABELA_DB_NAME') ?: 'refac539_mensaje';

$conn = null;
$stmt = null;

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    $conn->set_charset('utf8mb4');

    $stmt = $conn->prepare('INSERT INTO tabla_mensaje (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $nombre, $correo, $telefono, $mensaje);
    $stmt->execute();
} catch (Throwable $e) {
    error_log('Error al guardar formulario: ' . $e->getMessage());
    redirectToContact(['error' => 'db']);
} finally {
    if ($stmt instanceof mysqli_stmt) {
        $stmt->close();
    }

    if ($conn instanceof mysqli) {
        $conn->close();
    }
}

$mailSent = false;

try {
    $smtpHost = getenv('FABELA_SMTP_HOST') ?: 'mail.refaccionesfabela.com';
    $smtpUser = getenv('FABELA_SMTP_USER') ?: 'web@refaccionesfabela.com';
    $smtpPass = getenv('FABELA_SMTP_PASS') ?: 'F@be2l@#20';
    $smtpPort = (int) (getenv('FABELA_SMTP_PORT') ?: 587);

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;

    $mail->setFrom($smtpUser, 'Refacciones Fabela');
    $mail->addAddress(getenv('FABELA_MAIL_TO_1') ?: 'ventas@refaccionesfabela.com.mx');

    $mailTo2 = getenv('FABELA_MAIL_TO_2') ?: 'fabela_mauricio@hotmail.com';
    if ($mailTo2 !== '') {
        $mail->addAddress($mailTo2);
    }

    $mailBody = "Nombre del cliente: {$nombre}\n" .
        "Correo: {$correo}\n" .
        "Tel: {$telefono}\n" .
        "Mensaje: {$mensaje}";

    $mail->isHTML(false);
    $mail->Subject = 'Nuevo contacto de cliente desde la pagina web';
    $mail->Body = $mailBody;

    $mail->send();
    $mailSent = true;
} catch (Exception $e) {
    error_log('Error al enviar correo del formulario: ' . $e->getMessage());
}

if ($mailSent) {
    redirectToContact(['success' => '1']);
}

redirectToContact(['success' => '1', 'mail' => '0']);
