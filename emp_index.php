<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
</head>
<body bgcolor="#87CEEB";>

<center><b><font color = "brown" size="6">E-Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Employee Login </h1>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#87Ceeb">
<tr>
<form name="form1" method="post" action="emp_checklogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#87CEEB">
<tr>
<td width="78">Email Id</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="email" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>Not registered? -> <a href="emp_registeracc.php"><b>Register Here</b></a>
</center>
<div id="footer">
    <center>
    <br>New Employees are requested to register before login 
    </center>
</div>
</div>
</body></html>