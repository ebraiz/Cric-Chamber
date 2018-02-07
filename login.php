<?php
session_start();
?>

<html>
	<head>
		<title>Admin Login</title>

	</head>
<body background='images/background.jpg'>
<br><br><br><br><br><br><br><br><br><br><br>
<table width='400' align='center' valign='bottom' border='1'>

<form action='login.php' method='post'>

<tr><td colspan='5' align='center'>
<h1>Admin Login</h1></td></tr>

<tr>
<th><h3><b><i>Admin Name</i></b></h3></th>
<td><input type='text' name='admin_name' width='50px'></td>
</tr>

<tr>
<th><h3><b><i>Admin Password</i></b></h3></th>
<td><input type='password' name='admin_pass'></td>
</tr>

<tr><td colspan='6' align='center'><input type='submit' name='submit' value='login'></td></tr>

</form>
</table>


</body>
</html>
<?php
include("includes/db.php");
if(isset($_POST['submit']))
{
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];

$query = "select * from admin_login where user_name='$admin_name' AND user_pass='$admin_pass'";
	
	$run = mysql_query($query);
	if(mysql_num_rows($run)==1)
	{
		echo "<script>window.open('admin_panel.php?logged=You are Logged in Successfully!','_self')</script>";
	}
	else{
		echo "<script>alert('Username or Password is incorrect!')</script>";		
	}
}
?>