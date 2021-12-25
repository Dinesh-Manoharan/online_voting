<?php
$host = 'onlinevotingsqlaerver.mysql.database.azure.com';
$username = 'sqladmin';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connect
//$con=mysqli_connect('onlinevotingsqlaerver.mysql.database.azure.com', , , ,3306, NULL, );
mysqli_real_connect(
    mysqli $link
    string $host = 'onlinevotingsqlaerver.mysql.database.azure.com',
    string $username = 'sqladmin',
    string $passwd = 'Fastrack#28',
    string $dbname = 'vote',
    int $port = 3306,
    string $socket = MYSQLI_CLIENT_SSL,
): bool

//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
