 <?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$your_name = htmlspecialchars($_POST["request-name"]);
$your_phone = htmlspecialchars($_POST["request-phone"]);

/* Устанавливаем e-mail адресата */
$myemail = "my_email@mail.ru";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */
$your_name = check_input($_POST["request-name"], "Введите ваше имя!");

$your_phone = check_input($_POST["request-phone"], "Введите ваш e-mail!");


/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Здравствуйте! 
Вашей контактной формой было отправлено сообщение! 
Имя отправителя: $your_name 
Телефон: $your_phone 
Конец";
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $yourname <$your_phone> \r\n "; 
mail($myemail, $message_to_myemail, $from);
?>
<p>Ваше сообщение было успешно отправлено!</p>
<p>На <a href="index.html">Главную </a></p>
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