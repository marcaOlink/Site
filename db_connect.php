<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "id20112049_360apostas";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
echo "Falho na conexão:".mysqli_connect_error();
endif;