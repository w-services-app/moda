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
$debug =  ' DEBUG <br/> '
            . '$name: ' . $name . '<br/>'
            . '$email: ' . $email . '<br/>' 
            . '$messages: ' . $messages . '<br/>'
            . '$razmer: ' . $razmer . '<br/>'
            . '$color: ' . $color . '<br/>';

if ($name == '') {
    $error = TRUE;
    $response = 'Вы забыли указать Ваше Имя' . $debug;
}

if ($email === '') {
    $error = true;
    $response = 'Пожалуйста, укажите Ваше э-маил.' . $debug;
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $response = 'E-mail "' . $email . '" указан не верно.' . $debug;
    }
}

if ($messages == '') {
    $error = TRUE;
    $response = 'Вы забыли написать сообщение' . $debug;
}


if ($razmer == 'not-select') {
    $error = TRUE;
    $response = 'Вы забыли указать размер платья.' . $debug;
}
if ($color == 'not-select') {
    $error = TRUE;
    $response = 'Вы забыли указать цвет платья.';
}

if (!$error) {
    $response = 'Ваше сообщение успешно отправлено. С вами свяжутся в течении 24-х часов.' . $debug;
}

$data = array(
    'response' => $response,
    'error' => $error
);

header('Content-Type: application/json');

echo json_encode($data);
