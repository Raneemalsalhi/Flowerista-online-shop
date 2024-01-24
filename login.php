<?php  
$host="localhost";
$user="id21749152_flowerista";
$password="Flowerista1*";
$db="id21749152_flowerista";

$data =	mysqli_connect($host,$user,$password,$db);
if ($data===false) {
	die("connection error");
	// code...
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from users where username='".$username."' AND password='".$password."' ";
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);
		if($row["usertype"]=="user")
	{	
		header("location:index.php");
	}

	elseif($row["usertype"]=="admin")
	{
		header("location:index.php");
		
	}

	else
	{
		echo "username or password incorrect";
	}

}



?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGin to Your Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background=#eee;">
	<center>
	<div  style="width:500px;border: 2px solid #ccc;padding: 50px; background: #fff;border-radius: 5px;margin: 100px auto;">
		<h1>Log In</h1>
     <form action="#" method="POST">


		<div style="background-color: white; width: 500px;">
		<div>
     	<table>
				 	<tr>
			
					<td><label>Username:</label></td>
					<td><input type="text" name="username" size="60px" required></td>
				</tr>
     				<tr>
			
					<td><label>Password:</label></td>
					<td><input type="password" name="password" size="60px" required></td>
				</tr>	
     	</table>
     </div>
     <br/><br/>
     	<button type="submit" value="Login" style="background: #555; padding: 10px 15px; color: #fff;border: none;">Login</button>
     	<p>Not a Member Yet ? <a href="Regster.php">Create an Account</a></p>
     	</center>
     </div>
     </form>
     </div>
</body>
</html>