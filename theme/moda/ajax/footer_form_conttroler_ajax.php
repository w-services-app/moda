<?php

if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
    die("Hacking attempt!");
}

$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$messages = isset($_POST["messages"]) ? trim($_POST["messages"]) : "";
$razmer = isset($_POST["razmer"]) ? trim($_POST["razmer"]) : "";
$color = isset($_POST["color"]) ? trim($_POST["color"]) : "";

$response = '';
$error = false;

if ($name == '') {
    $error = TRUE;
    $response = 'Вы забыли указать Ваше Имя';
}

if ($email === '') {
    $error = true;
    $response = 'Пожалуйста, укажите Ваше э-маил.';
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $response = 'E-mail "' . $email . '" указан не верно.';
    }
}

if ($messages == '') {
    $error = TRUE;
    $response = 'Вы забыли написать сообщение';
}


if ($razmer == 'not-select') {
    $error = TRUE;
    $response = 'Вы забыли указать размер платья.';
}
if ($color == 'not-select') {
    $error = TRUE;
    $response = 'Вы забыли указать цвет платья.';
}

if (!$error) {
    $response = 'Ваше сообщение успешно отправлено. С вами свяжутся в течении 24-х часов.';
}

$data = array(
    'response' => $response,
    'error' => $error
);

header('Content-Type: application/json');

echo json_encode($data);
