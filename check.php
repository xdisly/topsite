<?php
session_start();
require_once ('dbconnect.php');

if (isset($_POST['btn-sign'])){
    $email= $_POST['email'];
    $passwd= $_POST['password'];

}
else{
    echo "WTF? (((((";
}
$sql = "SELECT * FROM users WHERE email = '".$email."'";
//echo $sql;
$result = mysqli_query($mysqli, $sql);
//dd($result);

if ($result->num_rows != 0) {

    showAlert("email enable");

    //mysqli_free_result($result);
}else{
    $sql = "INSERT INTO users (email, password) VALUES('".$email."', '".$passwd."');";
    $result = mysqli_query($mysqli, $sql);
    showAlert( 'Пользователь зарегистрирован)');
    goUri('index.php');
}

