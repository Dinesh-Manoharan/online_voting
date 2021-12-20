<?php
session_start();
require('emp_connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:emp_accessdenied.php");
}
?>
<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="#87CEEB">

<center><b><font color = "brown" size="6">E-Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>ADMINISTRATION CONTROL PANEL </h1><ul>
<li><a href="admin.php">Home</a></li> <li><a href="ad_positions.php">Manage Positions</a></li> <li> <a href="ad_candidates.php">Manage Candidates</a></li> <li><a href="ad_refresh.php">Poll Results</a></li> <li><a href="ad_manageadmins.php">Manage Account</a></li> <li><a href="ad_changepassword.php">Change Password</a></li> <li><a href="ad_logout.php">Logout</a></li>
</ul></div>
<p align="center">&nbsp;</p>
<div id="container">



</div>
</div>
</body></html>