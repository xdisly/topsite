<?php
   $mysql_connection = mysqli_connect("192.168.200.79", "user", "password", "1131_TopSite");
   $result = mysqli_query($mysqli, "SELECT * from table category");
   ?>


<?php
$mysqli = new mysqli("192.168.200.79", "user", "password", "1131_TopSite");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("192.168.200.79", "user", "password", "1131_TopSite", 3306);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>