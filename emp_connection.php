<?php
$host = 'onlinevotingsqlaerver.mysql.database.azure.com';
$username = 'sqladmin';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connect
//mysqli_real_connect($con, 'onlinevotingsqlaerver.mysql.database.azure.com', 'sqladmin' , 'Fastrack#28' , 'vote' , 3306, NULL, );

$con=mysqli_connect('onlinevotingsqlaerver.mysql.database.azure.com', 'sqladmin' , 'Fastrack#28' , 'vote' , 3306 , NULL , MYSQLI_CLIENT_SSL);


//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
