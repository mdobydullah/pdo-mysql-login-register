<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<html>
<head><title>Dashboard</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['name']; ?></b></div>
			<div style="margin: 15px">
				Welcome <?php echo $_SESSION['name']; ?> <br>
				<a href="update.php">Update</a> <br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>
