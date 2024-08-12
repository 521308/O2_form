<?php
//Пример настроек в случае, если ящик получателя почты - gmail.com
return [
	'mail_settings' => [               
	    'host'       => 'smtp.gmail.com',                   
	    'auth'   => true,                 
	    'username'   => 'Свой email',                    
	    'password'  => 'Свой пароль приложения',                               
	    'secure' => "ssl",            
	    'port'       => 465,
	    'charset'    => 'UTF-8',
	    'fromUsername' => 'Имя отправителя', 
		'fromEmail' =>  'Почта отправителя (можно указать свою)',
		'is_html' => true,
	],
];