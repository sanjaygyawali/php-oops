<!DOCTYPE html>
<html>
<head>
	<title> PHP OOPs | Login </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/font.css" rel="stylesheet">
</head>
<body>

	<div id="wrapper">

		<div class="loginPage">

		<div id="formContainer">
			<div class="">
				<div class="panel panel-default">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
				  	<form role="form" method="post" action="config/loginformdata.php" id="formContent">
				  	  <div class="form-group">
				  	    <label >Username:</label>
				  	    <input type="text" class="form-control" name="username" id="username">
				  	  </div>
				  	  <div class="form-group">
				  	    <label>Password:</label>
				  	    <input type="password" class="form-control" name="password" id="password">
				  	  </div>
				  	  <div class="form-group"> <br>
				  	  	<button type="submit" class="btn btn-success btn-block">Login</button>
				  	  </div>
				  	</form>
				  </div>
				  <div class="panel-footer">
				  		Create account <a href="register.php" >Register </a>
				  </div>
				</div>
			</div>
		</div>
		</div>
	</div>

</body>
</html>