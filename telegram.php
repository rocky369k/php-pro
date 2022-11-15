<?php

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];


if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;

$ccc = file_get_contents("https://ipapi.co/". $ip ."/country_calling_code/");
$ccode = file_get_contents("http://ip-api.com/json/". $ip."?fields=country,countryCode");


$nameofuser = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

$token = "5766790877:AAESdD8JcpPcztXuNhZGDOrqAFJcbfXW_sA";
$chat_id = "-855791974";

$arr = [
    'Имя пользователя: ' => $nameofuser,
    'Телефон: ' => $phone,
    'Email: ' => $email,
    'Ip: ' => $ip,
    'Страна' => $ccode['country'],
];

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


