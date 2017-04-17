 <?php
 mb_internal_encoding("UTF-8");
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$your_name = htmlspecialchars($_POST["request-name"]);
$your_phone = htmlspecialchars($_POST["request-phone"]);
$your_name = urldecode($_POST["request-name"]);
$your_phone = urldecode($_POST["request-phone"]);

/* Устанавливаем e-mail адресата */
$myemail = "sale-rep@gk-soft.ru, sale@gk-soft.ru, unp@gk-soft.ru";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */
$your_name = check_input($_POST["request-name"], "Введите ваше имя!");

$your_phone = check_input($_POST["request-phone"], "Введите ваш телефон!");


/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Здравствуйте! 
Вашей контактной формой было отправлено сообщение! 
Имя отправителя: $your_name 
Телефон: $your_phone 
Конец";
/* Отправляем сообщение, используя mail() функцию */
$from  = "От кого: лэндинг 1С-Отчетность \r\n "; 
mail($myemail, "Запрос со страницы 1С-Отчетность", $message_to_myemail, $from);
?>
<head>
    <meta charset="utf-8">
</head>    
<p align="center">Ваше сообщение было успешно отправлено!</p>
<p align="center"><a href="../index.html">Вернуться обратно</a></p>
<?php
/* Если при заполнении формы были допущены ошибки сработает 
следующий код: */
function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}
function show_error($myError)
{
?>
<html>
<body>
<p>Пожалуйста исправьте следующую ошибку:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?> 