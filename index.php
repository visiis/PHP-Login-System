<?php

	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="follow">

	<title>Document</title>

	<style>
		body {
			font-family: "Microsoft YaHei","Heiti TC";
		}
	</style>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
</head>
<body>


	<div class="uk-section uk-container ul-text-center">
		<?php
			echo 'Today is :' . date('Y m d');
		?>
		<p>
			<a href="login.php">登入</a>
			<a href="register.php">註冊</a>
		</p>
	</div>


	<?php require_once "inc/footer.php" ?>

</body>
</html>