<?php
session_start();
require_once ('dbconnect.php');



if (isset($_POST['btn-login'])){
    $email= $_POST['email'];
    $passwd= $_POST['password'];

}
else{
    goUri('index.php');
}
$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$passwd."';";
//echo $sql;
$result = mysqli_query($mysqli, $sql);
//dd($result);

if ($result->num_rows != 1) {

    showAlert("Что-то пошдо не так(");

    //mysqli_free_result($result);
}else{
    $_SESSION['userEmail'] = $email;
    showAlert( 'Рады вас снова видеть)');
    goUri('index.php');
}

