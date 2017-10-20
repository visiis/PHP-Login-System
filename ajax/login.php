<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make suer the user does not exist.
		$findUser = $con->prepare("SELECT user_id,password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists. try and sign them in
			// We can also check to see if they are able to log in.
			$User = $findUser->fetch(PDO::FETCH_ASSOC);
			
			$user_id = (int) $User['user_id'];
			$hash = (String) $User['password'];

			$return['rem'] = $User['user_id'] . $User['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] = 'dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "密碼錯誤";
			}

		} else {
			$return['error'] = "此信箱並無申請帳號.<br> <a href='/web/php_login_course/register.php'>建立帳號?</a>";
		}

		// Make suer the user CAN be added AND is added

		//Return the proper information back to JavaScript to redirect us.

		echo json_encode($return, JSON_PRETTY_PRINT); exit();
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless
		exit('Invalide Url');
	}

?>