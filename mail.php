<?php if (isset($_POST["name"])){
if (isset($_POST["name"])) {$name = $_POST["name"];}
if (isset($_POST["phone"])) {$phone = $_POST["phone"];}


if($name=="" or $phone==""){ // Проверяем на заполненность всех полей.
	echo "Заполните все поля";
}else{
	$recepient = "azatakhmerov771@yandex.ru";
	$siteName = "truby";
	
	$name = trim($_POST["name"]);
	$phone = trim($_POST["phone"]);
	$text = trim($_POST["text"]);
	$message = "Имя: $name  \nТелефон: $phone \nСообщение: $text";
	$pagetitle = "Заявка с сайта \"$siteName\"";
	$send = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");


 if ($send == "true")
 {
 echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.";
 }
 else
 {
 echo "Не удалось отправить, попробуйте снова!";
 }
}
}
?>