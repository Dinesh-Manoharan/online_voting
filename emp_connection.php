<?php
$host = 'onlinevotingsqlaerver.mysql.database.azure.com';
$username = 'sqladmin@onlinevotingsqlaerver';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connection
mysqli_real_connect($con, 'onlinevotingsqlaerver.mysql.database.azure.com', 'sqladmin@onlinevotingsqlaerver', 'Fastrack#28', 'vote', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
