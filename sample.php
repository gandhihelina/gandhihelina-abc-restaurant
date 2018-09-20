
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<style>
.form1
{
	border:0px solid maroon;
	padding:30px 60px;
	margin-top:0%;
	webkit-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	color:white;
}

a
{
	text-decoration:none;
}

#login
{
	color:white;;
	font-weight:bolder;
	font-size:22px;
}

.bg
{
	background:url('back7.jpg') center center fixed;
	background-repeat:no-repeat;
	height:100vh;
	background-size:cover;
}
</style>

<script type="text/javascript"></script>
<script>
function setdt()
{

var d=new Date();
var dy=d.getDate();
var mn=d.getMonth()+1;
var y=d.getFullYear();
var fd=y+"/"+mn+"/"+dy;
document.f1.dt1.value=fd;
}
</script>

</head>

<body onload="setdt();">
<div class="container-fluid">
	<div class="row bg">
		
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<form class="form1" name="f1" id="login" method="post" action="">
			<div class="form-group">
				<h1 style="color:red">ABC Restaurant</h1>
				<label for="item">Item</label>
				<select class="form-control" name="it">
					<option>Tea</option>
					<option>Coffee</option>
					<option>Samosa</option>
					<option>Cake</option>
				</select>
			</div>
			<div class="form-group">
				<label for="item">Quantity</label>
				<input type="text" class="form-control" name="qty"  placeholder="Enter Quantity" required>
			</div>
			<div class="form-group">
				<label for="item">Total</label>
				<input type="text" class="form-control" name="total" readonly>
			</div>
			
			<div class="form-group">
				<label for="dt">Order Date:</label>
				<input type="text" class="form-control" name="dt1" readonly >
			</div>
			<div class="form-group">
				<button type="submit"  class="btn btn-success  btn-block" value="Order">Order</button>
			</div>
			<div class="form-group">
				<a href="index.php" class="btn btn-success  btn-block">Cancel</a>
			<div><br>
			
			</form>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
	</div>
</div>

<?php
$ttl=0;
session_start();
include("connect.php");
if((isset($_POST['it'])) and (isset($_POST['qty'])))
{
	echo "<script type='text/javascript'>document.f1.total.value='0';document.f1.qty.value='';</script>";
	$item=$_POST['it'];
	$qty=$_POST['qty'];
	$u=$_SESSION['uname'];
	$sql="select rate from item where items='$item'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$rt=$row['rate'];
	$ttl=$qty*$rt;
	$dt=$_POST['dt1'];
	
	echo "<script type='text/javascript'>document.f1.total.value=$ttl;document.f1.qty.value=$qty;</script>";
	$query="insert into details values('$item','$qty','$rt','$ttl','$u','$dt')";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>alert('Order placed');</script>";
		
	}
	
}
?>
</body>
</html>