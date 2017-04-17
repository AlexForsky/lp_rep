<?php
$your_name = $_POST['request-name'];
$your_phone = $_POST['request-phone'];
$your_name = htmlspecialschars($your_name);
$your_phone = htmlspecialschars($your_phone);
$your_name = urldecode($your_name);
$your_phone = urldecode($your_phone);
$your_name = trim($your_name);
$your_phone = trim($your_phone);

mail("aa_a@bk.ru", "Заявка с сайта 1С-Отчетность", "Имя:".$your_name."Телефон".$your_phone);
if (mail("aa_a@bk.ru", "Заявка с сайта 1С-Отчетность", "Имя:".$your_name."Телефон".$your_phone))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>

