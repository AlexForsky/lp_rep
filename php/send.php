<?php

/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$your_name = htmlspecialchars($_POST["request-name"]);
$your_phone = htmlspecialchars($_POST["request-phone"]);
$your_name = urldecode($_POST["request-name"]);
$your_phone = urldecode($_POST["request-phone"]);


$to = 'unp@gk-soft.ru';
$subject = 'Вопрос с сайта про 1С-Отчетность';
$message = '
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Подробности про 1С-Отчетность</title>
  </head>
  <body>
    <p>Имя:'.$_POST['request-name'].'</p>
    <p>Телефон:'.$_POST['request-phone'].'</p>
  </body>
  </html>
';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <gk-soft@gk-soft.ru>\r\n"; 
mail($to, $subject, $message, $headers); 
?>

<head>
    <meta charset="utf-8">
</head>    
<p align="center">Ваше сообщение было успешно отправлено!</p>
<p align="center"><a href="../index.html">Вернуться обратно</a></p>