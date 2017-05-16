<?php

$host = 'localhost'; // адрес сервера 
$database = 'newShopDB'; // имя базы данных
$user = 'admin'; // имя пользователя
$password = '1111'; // пароль

$link = mysqli_connect($host,$user,$password,$database);

if ( mysqli_connect_errno())
{
	echo 'ошибка к подключению к БД('.mysqli_connect_errno().'):'.mysqli_connect_error();
	exit();
}

/*
$link= new mysqli('localhost','admin','1111','newShopDB');
if ($link->connect_error) {
    die('Connect Error (' . $link->connect_errno . ') ' . $link->connect_error);
}

mysql_select_db($db_database,$link) or die("Нет соединения с БД".mysql_error());
mysql_query("SET names UTF-8");

*/




?>