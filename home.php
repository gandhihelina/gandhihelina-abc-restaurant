
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
	margin-top:20%;
	webkit-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
}

a
{
	text-decoration:none;
}

.bg
{
	background:url('back5.jpg') center center fixed;
	background-repeat:no-repeat;
	height:100vh;
	background-size:cover;
}
</style>


</head>
<?php
$a=1;
$b=2;
$c=3;
?>
<body>
<div class="container-fluid">
	<div class="row bg">
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<form class="form1" name="f1" method="POST">
			<h1 style="color:red">ABC Restaurant</h1>
			<center><label for="name" style="color:red"><?php session_start();
										$unm=" ";
										if(isset($_SESSION['uname']))
										{	$unm=$_SESSION['uname'];
										}
										echo 'welcome '.'<b>'.$unm.'</b>';
										?></label></center>
			<br>
			<div class="form-group"><a href="sample.php" class="btn btn-success  btn-block">Place Order</a><div><br>
			<div class="form-group"><a href="reports.php" class="btn btn-success  btn-block">View Reports</a><div><br>
			<div class="form-group"><a href="add.php?id=2" class="btn btn-success  btn-block">Logout</button></a><div><br>
			</form>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
	</div>
</div>
</body>
</html>