<?php
$host = 'onlinevotingsqlaerver.database.windows.net';
$username = 'sqladmin';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connect


$con=mysqli_connect('onlinevotingsqlaerver.database.windows.net', 'sqladmin' , 'Fastrack#28', 'vote');


//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
