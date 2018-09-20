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
	border:2px solid maroon;
	padding:30px 60px;
	margin-top:30%;
	webkit-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
	box-shadow: -1px 3px 81px 27px rgba(0,0,0,0.75);
}
</style>

</head>

	<div class="row">
<body>
<div class="container-fluid">
	<h2>hi</h2>
	
<?php
include("connect.php");
if(isset($_GET['id']))	
{
	$i=$_GET['id'];
	if($i==3)
	{
		session_start();
		unset($_SESSION['uname']);
		session_destroy();
		header('location:index.php');
	}
}

?>
</div>
</div>

</body>
</html>