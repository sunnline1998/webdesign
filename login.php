<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body background="shopcar.jpg">

	<table align="center">
		<form action="">
			<tr>
				<td colspan="2" align="center">Login</td>
				
			</tr>
			<tr>
				<td>UserName</td>
				<td><input type="text" name="un"></td>
			</tr>
			<tr>
				<td>PassWord</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Login">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="main.php">Return Home</a></td>
			</tr>
		</form>
	</table>

<?php 
	include 'db.php';
	if (isset($_GET['un']) && isset($_GET['pw'])) 
	{
		$un = $_GET['un'];
		$pw = $_GET['pw'];
		$sql = "SELECT * from account where username = '$un' and password = '$pw'";
		$acc = query($sql);
		if ( count($acc))
		{
			header("location: ./index.php");
		}
		else
		{
			echo('<span style="color:red;">Email or Password is not correct </span>');
		}
	}
?>

</body>
</html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: #9400D3;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;

}

table {
 	font-family: Monospace;
	font-size: 20px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>