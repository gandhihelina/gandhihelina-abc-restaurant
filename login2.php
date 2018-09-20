<?php

include("connect.php");
session_start();
$a="";
$b="";
$a=$_POST['uname'];
$b=$_POST['pass'];

$sql="select pass from login where uname='$a' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$c=$row['pass'];

if($b==$c)
{
		echo "<script type='text/javascript'></script>
		<script>
		alert('Login Successful');
		</script>
		";
		$_SESSION['uname']=$a;
		header('location:home.php');
}
else
{
		
		header('location:loginphp.php');
		echo "<script type='text/javascript'></script>
		<script>
		alert('Login not Successful');
		</script>
		";
}
?>