<html>
<head><title>PDO MySQL</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #079B96; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>PDO MySQL</b></div>
			<div style="margin: 15px">
				Welcome guest !
				<br>
				<a href="login.php">Login</a> <br>
				<a href="register.php">Register</a> <br>
				<a href="forgot.php">Forgot Password</a>
			</div>
		</div>
	</div>
</body>
</html>
