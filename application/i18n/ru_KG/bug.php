<?php

$lang = array
(
	'subject' => array
	(
		'required'		=> 'Введите поле Темы .',
		'length'        => 'Длинна Темы не должна содержать менее 3х символов.'
	),

	'yourname' => array
	(
		'required'		=> 'Введите Ваше имя.',
		'length'        => 'Длинна Имени не может быть менее 3х символов.'
	),

	'error' => array
	(
		'required'		=> 'Введите описание ошибки.'
	),

	'email' => array
	(
		'required'    => 'Нужно ввести адрес Email, или уберите галочку.',
		'email'		  => 'Ваш Email адрес введен не правильно, введите правильно.',
		'length'	  => 'Длинна Email адреса не может быть менее 4х и не более 64 символов.'
	),

	'captcha' => array
	(
		'required' => 'Введите защитный код', 
		'default' => 'Введите защитный код правильно'
	)

);
