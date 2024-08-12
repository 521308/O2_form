<?php

require_once __DIR__ . "/vendor/autoload.php";
$settings = require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/functions.php';

$radio = 'не указан';
$email= $_POST['email'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$last = $_POST['last'];
$name = $_POST['name'];
$dadname = $_POST['dadname'];
$birthDay = $_POST['date'];
$birthMonth = $_POST['date1']+=1;
$birthYear = $_POST['date2'];

if ($birthMonth <=9)
{

	$date = "{$birthDay}.0{$birthMonth}.{$birthYear}";

} else {
	$date = "{$birthDay}.{$birthMonth}.{$birthYear}";;
}

if(isset($_POST['radio']))
{
	if($_POST['radio'] == 1)
	{
		$radio = 'Мужской';

	} else{
		$radio = 'Женский'; 
	}
}

$body= "<table>
<tr><td>Почта</td> <td>{$email}\r\n</td></tr><br/>
<tr><td>Телефон</td> <td>{$tel1}\r\n</td></tr><br/>
<tr><td>Дополнительный номер</td> <td>{$tel2}\r\n</td></tr><br/>
<tr><td>ФИО</td> <td>{$last} {$name} {$dadname}\r\n</td></tr><br/>
<tr><td>Дата рождения</td> <td>$date\r\n</td></tr><br/>
<tr><td>Пол</td> <td>{$radio}\r\n</td></tr><br/>
</table>
";
var_dump(runMail($settings['mail_settings'], $settings['mail_settings']['username'], 'Новое письмо' ,$body));