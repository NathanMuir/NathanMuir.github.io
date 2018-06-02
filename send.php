<?php

$recepient = "sergyasnyy@yandex.ru"; 
$siteName = "WebDev"; 

$report = json_decode($_POST["report"], true);

$name = trim($report["name"]); 
$email = trim($report["mail"]); 
$mess = trim($report["text"]); 
$message = "Имя: $name \nE-mail: $email \nСообщение: $mess"; 

$pagetitle = "Заявка с сайта \"$siteName\""; 
$result=mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

if ($result)
{
echo "Сообщение отправленно успешно";
}
else
{
echo "Возникла ошибка =(";
}