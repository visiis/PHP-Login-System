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
  	<base href="" target="_blank"/>

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
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
			<form class="uk-form-stacked js-register">

				<h2>註冊</h2>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com" required="required">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-password">密碼</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-password" type="password" placeholder="Your Password" required="required">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">註冊</button>
			    </div>

			</form>
		</div>
	</div>

	<?php require_once "inc/footer.php" ?>

</body>
</html>