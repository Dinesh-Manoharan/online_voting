<?php
$host = 'onlinevotingsqlaerver.mysql.database.azure.com';
$username = 'sqladmin';
$password = 'Fastrack#28';
$db_name = 'vote';

//Initializes MySQLi
$con = mysqli_init();

// Establish the connect


$con=mysqli_connect('onlinevotingsqlaerver.mysql.database.azure.com', 'sqladmin' , 'Fastrack#28');
mysqli_select_db($con, "vote") or die ("no database");  

//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
