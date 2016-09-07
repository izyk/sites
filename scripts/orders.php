<?php 
$page_body=<<<"ENDBODY"
<h1>Пропуск
</h1>
<p class="perror">
	$error_message
</p>
 <form action="/klientam/" method="post">
  <fieldset>
    <legend> Обязательно для заполнения:</legend>
    Фамилия И.О.:<br>
    <input type="text" name="csirname" value="$csirname"><br>
    Адрес электронной почты:<br>
    <input type="text" name="cemail" value="$cemail"><br>
    Номер телефона:<br>
    <input type="text" name="cphone" value="$cphone"><br><br>
  </fieldset>
    Номер и марка автомобиля для въезда:<br>
    <input type="text" name="ctruck" value="$ctruck"><br><br>
    <input type="submit" value="Заказать">
</form>
ENDBODY;
?>
