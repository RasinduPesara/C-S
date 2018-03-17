<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body style="background-color:#7f8c8d ">
	<div id="main-wrapper" >
		<center><h2>Login Admine panal</h2>
				<img src="images/IME.png" id="ime" >
		</center>
			<form class="myform" action="index.php" method="post">
				<b><label>User Name</label></b><br>
				<input type="text" class="inputvalues" placeholder="Enter Your User Name"><br>

				<b><label>Password</label></b><br>
				<input type="Password" class ="inputvalues" placeholder="Enter Your Password"><br>
				<input type="submit" id="login_btn" value="Login"><br>
				<input type="button" id="register_btn" value="register">
			</form>


	</div>


</body>
</html>