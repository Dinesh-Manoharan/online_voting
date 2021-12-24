<?php
$host = 'onlinevotingsqlaerver.database.windows.net';
$username = 'vote (sqladmin)';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connection
mysqli_real_connect($con, 'onlinevotingsqlaerver.database.windows.net', 'vote (sqladmin)', 'Fastrack#28', 'vote', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
