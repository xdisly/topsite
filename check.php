<?php
session_start();
require_once ('dbconnect.php');

if (isset($_POST['btn-sign']))
    {
    $email= $_POST['email'];
    $passwd= $_POST['password'];
    }

else
    {
    echo "Ошибка";
    }

$sql = "SELECT * FROM users WHERE email = '".$email."'";
//echo $sql;
$result = mysqli_query($mysqli, $sql);
//dd($result);

if ($result->num_rows != 0)
    {
    showAlert("Данный email уже зарегистрирован");
    //mysqli_free_result($result);
    goUri('index.php');
    }

else
    {
    $sql = "INSERT INTO users (email, password) VALUES('".$email."', '".$passwd."');";
    $result = mysqli_query($mysqli, $sql);
    showAlert( 'Регистрация выполнена успешно');
    goUri('index.php');
    }

