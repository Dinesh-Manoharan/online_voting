<?php
$host = 'onlinevotingsqlaerver.database.windows.net';
$username = 'sqladmin';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, 'onlinevotingsqlaerver.database.windows.net', 'sqladmin', 'Fastrack#28', 'vote', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
