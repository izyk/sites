<?php 
$page_title="Пропуск, заявка";
$page_desc="Заказать пропуск на территорию.";
$page_kwords="сохранить, груз, пропуск, склад, Москва, Митино";
$page_css="/css/orders.css";
$menu_active[0]="";
$menu_active[1]="";
$menu_active[2]="active";
$menu_active[3]="";
$menu_active[4]="";

$ok_request=TRUE;
$error_message="";

if (isset($_POST['csirname'])) {
	$csirname=test_input($_POST['csirname']);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[а-яА-Я .]+$/u",$csirname)) {
		$ok_request=FALSE;
		$error_message="Недопустимые символы в поле Ф.И.О. ";
     };
} else {
	$csirname="Фамилия И.О.";
	$ok_request=FALSE;
}

if (isset($_POST['cemail'])) {
	$cemail=test_input($_POST['cemail']);
     // check if e-mail address is well-formed
	if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
		$ok_request=FALSE;
		$error_message=$error_message."Неправильно записан адрес электронной почты. ";
	}	
} else {
	$cemail="ivanov@gmail.com";
	$ok_request=FALSE;
}

if (isset($_POST['cphone'])) {
	$cphone=test_input($_POST['cphone']);
     // check if phone is well-formed
	if (!preg_match("/^[0-9 \+()]+$/u",$cphone))  {
		$ok_request=FALSE;
		$error_message=$error_message."Неправильный формат номера телефона. ";
	}	
} else {
	$cphone="+7 (888) 777 66 55";
	$ok_request=FALSE;
}

if (isset($_POST['ctruck'])) {
	$ctruck=test_input($_POST['ctruck']);
     if (!preg_match("/^[а-яА-Яa-zA-Z0-9 \:]*$/u",$ctruck)) {
		$ok_request=FALSE;
		$error_message=$error_message."Недопустимые символы в поле \"Номер автомобиля\". ";
     };
} else {
	$ctruck="Scania: o946oa 177";
}
if ($ok_request == TRUE) {
	$mail_message="<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title>Propusk Message</title></head>
	<body> Message:<br>\r\n$csirname<br>\r\n$cemail<br>\r\nTruck: $ctruck<br>\r\nPhone: $cphone<br>\r\n</body></html>";
	$mail_result=mail('propusk@isklad.ru', 'Propusk', $mail_message,
	"From: propusk@isklad.ru\nReply-To: propusk@isklad.ru\nX-Mailer: PHP/".phpversion()."\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nContent-type: text/html; charset=\"utf-8\";\n\n",
	'-fpropusk@isklad.ru');
	if ($mail_result == FALSE) {
		$error_message="Произошел сбой на сервере. Ваш заказ не был отправлен.<br>Пожалуйста. Попробуйте еще раз позже.";
		$ok_request=FALSE;
	}
}
if ($ok_request == TRUE) {
$page_body=<<<"ENDBODY"
<h1>Пропуск заказан
</h1>
<p>
	Как только он будет готов, вы получите уведомление по электронной почте: "$cemail".<br>Спасибо за сотрудничество.
</p>
ENDBODY;
} else {
	require_once 'orders.php';
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
require_once 'isklad_out.php';
?>
