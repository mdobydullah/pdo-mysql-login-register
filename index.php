<html>
<head><title>PDO Login & Register Using PDO MySQL</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #00796b; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#00796b; color:#FFFFFF; padding:10px;"><b>PDO MySQL</b></div>
			<div style="margin: 15px">
				Welcome to iTnetBD !
			</div>
		</div>
	</div>
</body>
</html>
