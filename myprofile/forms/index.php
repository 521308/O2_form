<?php


require_once __DIR__ . "/vendor/autoload.php";
$settings = require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/functions.php';


header('Content-Type: application/json;charset=utf-8');
$data = json_decode(file_get_contents('php://input'), true);
$radio = 'не указан';
$email= $data['email'];
$tel1 = $data['tel1'];
$tel2 = $data['tel2'];
$last = $data['last'];
$name = $data['name'];
$dadname = $data['dadname'];
$birthDay = $data['birthday'];
$birthMonth = $data['birthmonth']+1;
$birthYear = $data['birthyear'];

if ($birthMonth <=9)
{

	$date = "{$birthDay}.0{$birthMonth}.{$birthYear}";

} else {
	$date = "{$birthDay}.{$birthMonth}.{$birthYear}";;
}

if(isset($data['radio']))
{
	if($data['radio'] == 1)
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