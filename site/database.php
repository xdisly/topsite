<?php

$server = "192.168.200.79"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
$username = "user"; /* Имя пользователя БД */
$password = "user"; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
$database = "1131_TopSite"; /* Имя базы данных, которую создали */

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
