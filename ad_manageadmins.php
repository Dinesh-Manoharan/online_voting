<?php
session_start();
require('emp_connection.php');
?>
<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head><body bgcolor="#87CEEB">

<center><b><font color = "brown" size="6">E-Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>MANAGE ADMINISTRATORS  </h1><ul>
<li><a href="admin.php">Home</a></li> <li> <a href="ad_positions.php">Manage Positions</a></li> <li> <a href="ad_candidates.php">Manage Candidates</a> </li><li> <a href="ad_refresh.php">Poll Results</a></li> <li> <a href="ad_manageadmins.php">Manage Account</a></li> <li> <a href="ad_changepassword.php">Change Password</a></li>  <li> <a href="ad_logout.php">Logout</a></li>
</ul>
</div>

<div id="container">
<?php
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:ad_accessdenied.php");
}

//fetch data for update file
$result=mysqli_query($con, "SELECT * FROM tbadministrators WHERE admin_id = '$_SESSION[admin_id]'");
if (mysqli_num_rows($result)<1){
    $result = null;
}
$row = mysqli_fetch_array($result);
if($row)
 {
 // get data from db
 $adminId = $row['admin_id'];
 $firstName = $row['first_name'];
 $lastName = $row['last_name'];
 $email = $row['email'];
 }

//Process
if (isset($_GET['id']) && isset($_POST['update']))
{
$myId = addslashes( $_GET['id']);
$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];

$sql = mysqli_query($con, "UPDATE tbAdministrators SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail' WHERE admin_id = '$myId'" );
}
?>
<table align="center">
<tr>
<td>
<form action="ad_manageadmins.php?id=<?php echo $_SESSION['admin_id']; ?>" method="post" onSubmit="return updateProfile(this)">
<table align="center">
<CAPTION><h4>UPDATE ACCOUNT</h4></CAPTION>
<tr><td>First Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="firstname" maxlength="15" value="<?php echo $firstName ?>"></td></tr>
<tr><td>Last Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="lastname" maxlength="15" value="<?php echo $lastName ?>"></td></tr>
<tr><td>Email Address:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="email" maxlength="100" value="<?php echo $email?>"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" value="Update Account"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>

</div>
</body></html>