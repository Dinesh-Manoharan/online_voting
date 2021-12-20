<?php
require('emp_connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:emp_accessdenied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="#87CEEB">

<center><b><font color = "brown" size="6">E-Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Employee HOME </h1>
<ul>
<li><a href="employee.php">Home</a></li> <li> <a href="emp_vote.php">Current Polls</a></li> <li> <a href="emp_manageprofile.php">Manage My Profile</a></li> <li> <a href="emp_changepass.php">Change Password</a></li> <li><a href="emp_logout.php">Logout</a></li>
</ul></div>

</div>
</body></html>