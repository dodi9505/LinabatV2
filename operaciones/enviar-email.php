<?php

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'error' => 'Método no permitido.',
    ]);
    exit;
}

if (!isset($_POST['accion']) || $_POST['accion'] !== 'Enviar') {
    http_response_code(400);
    echo json_encode([
        'error' => 'Solicitud inválida.',
    ]);
    exit;
}

$correoDestino = 'linabatoficial@gmail.com';
$correoUsuario = filter_var($_POST['correo'] ?? '', FILTER_SANITIZE_EMAIL);
$nombre = trim($_POST['nombre'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');
$asunto = 'Mensaje desde Página Oficial de Linabat';

if ($nombre === '' || $correoUsuario === '' || $mensaje === '') {
    http_response_code(422);
    echo json_encode([
        'error' => 'Todos los campos son obligatorios.',
    ]);
    exit;
}

if (!filter_var($correoUsuario, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        'error' => 'El correo electrónico no es válido.',
    ]);
    exit;
}

$cadena = "Nombre de la persona que contacta: {$nombre}\n";
$cadena .= "Correo electrónico: {$correoUsuario}\n";
$cadena .= "Mensaje:\n{$mensaje}";

$headers = [
    'From: ' . $correoUsuario,
    'Reply-To: ' . $correoUsuario,
    'Content-Type: text/plain; charset=UTF-8',
];

$enviado = mail($correoDestino, $asunto, $cadena, implode("\r\n", $headers));

if (!$enviado) {
    http_response_code(500);
    echo json_encode([
        'error' => 'No fue posible enviar el correo en este momento.',
    ]);
    exit;
}

echo json_encode([
    'respuesta' => 'correcto',
]);
