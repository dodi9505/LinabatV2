<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../libs/PHPMailer/src/PHPMailer.php';
require '../libs/PHPMailer/src/SMTP.php';
require '../libs/PHPMailer/src/Exception.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  exit(json_encode(['ok' => false]));
}

$nombre = trim($_POST['nombre']) ?? '';
$empresa = trim($_POST['empresa']) ?? '';
$email = trim($_POST['email']) ?? '';
$servicio = trim($_POST['servicio']) ?? '';
$mensaje = trim($_POST['mensaje']) ?? '';

if (!$nombre || !$email || !$servicio || !$mensaje) {
  exit(json_encode(['ok' => false, 'msg' => 'Faltan campos']));
}

$mail = new PHPMailer(true);

try {
  // SMTP
  $mail->isSMTP();
  $mail->CharSet = 'UTF-8';
  $mail->Encoding = 'base64';
  $mail->Host = 'mail.linabat.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'contacto@linabat.com';
  $mail->Password = 'l1n4b4t-conTACTO$@';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  // Remitente
  $mail->setFrom('contacto@linabat.com', 'Linabat Web');

  // A dónde llega
  $mail->addAddress('contacto@linabat.com');

  // Para responder directo al cliente
  $mail->addReplyTo($email, $nombre);

  // Contenido
  $mail->isHTML(true);
  $mail->Subject = "Nuevo contacto - $servicio";

  $mail->Body = "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
    </head>
    <body>
      <h2>Nuevo mensaje</h2>
      <p><b>Nombre:</b> {$nombre}</p>
      <p><b>Empresa:</b> {$empresa}</p>
      <p><b>Email:</b> {$email}</p>
      <p><b>Servicio:</b> {$servicio}</p>
      <p><b>Mensaje:</b><br>{$mensaje}</p>
    </body>
    </html>
  ";

  $mail->send();

  echo json_encode([
    'ok' => true,
    'msg' => 'Mensaje enviado correctamente'
  ]);

} catch (Exception $e) {
  echo json_encode([
    'ok' => false,
    'msg' => 'Error al enviar correo'
  ]);
}