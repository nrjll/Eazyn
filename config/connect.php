<?php

$username = "root";
$password = "123"; // No password provided
$host = 'localhost';

$is_connect = mysqli_connect($host, $username, $password);

if($is_connect){
    mysqli_select_db($is_connect, "izin_db");
}else{
    echo "Connection failed!";
}
?>
