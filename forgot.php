<?php
	require 'config.php';

	if(isset($_POST['forgotpass'])) {
		$errMsg = '';

		// Getting data from FROM
		$secretpin = $_POST['secretpin'];

		if(empty($secretpin))
			$errMsg = 'Please enter your secret pin to view your password.';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT password, secretpin FROM pdo WHERE secretpin = :secretpin');
				$stmt->execute(array(
					':secretpin' => $secretpin
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				if($secretpin == $data['secretpin']) {
					$viewpass = 'Your password is: ' . $data['password'] . '<br><a href="login.php">Login Now</a>';
				}
				else {
					$errMsg = 'Sercet pin not matched.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head><title>Forgot Password</title></head>
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
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Forgot Password</b></div>
			<?php
				if(isset($viewpass)){
					echo '<div style="color:#198E35;text-align:center;font-size:17px;margin-top:5px">'.$viewpass.'</div>';
				}
			?>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="secretpin" placeholder="Secret Pin" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='forgotpass' value="Check" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
