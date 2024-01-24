<?php
$host="localhost";
$user="id21749152_flowerista";
$password="Flowerista1*";
$db="id21749152_flowerista";

session_start();

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)

{
	die("COnnection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];


$sql="insert into users (username,email,password) values ('$username','$email','$password')  ";

$result=mysqli_query($data,$sql);

if($result)

{

	header("location:index.php");
}

else
{

	echo "Register failed";
}

}





?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background=#eee;">

<center>
	<div  style="width:500px;border: 2px solid #ccc;padding: 50px; background: #fff;border-radius: 5px;margin: 100px auto;">
		<h1>create account</h1>

	<form action="#" method="post">


		
		<div style="background-color: white; width: 500px;">
		<div>
			<table>
				 <tr>
					<td> <label>Username</label></td>
					<td><input type="text" name="username" size="60px" required></td>
				</tr>
				<tr>
			
					<td><label>Email</label></td>
					<td><input type="email" name="email" size="60px" required></td>
				</tr>
				<tr>
			
					<td><label>Password</label></td>
					<td><input type="password" name="password" size="60px" required></td>
				</tr>
		

		
		
	</table>
		</div>
<br/><br/>
<button type="submit" value="Register" style="background: #555; padding: 10px 15px; color: #fff;border: none;" >Signin</button>

</center>
</div>

	</form>
</div>
</body>
</html>