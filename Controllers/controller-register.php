<?php
	
	require("Models/model-users.php");

	$title = "FarmShop";
	if (isset($_POST['send'])) {
		if(
			filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["password"] &&
			mb_strlen($_POST["user_firstName"]) >= 3 &&
			mb_strlen($_POST["user_firstName"]) <= 72 &&
			mb_strlen($_POST["user_lastName"]) >= 3 &&
			mb_strlen($_POST["user_lastName"]) <= 72 &&
			mb_strlen($_POST["password"]) >= 5 &&
			mb_strlen($_POST["password"]) <= 255 &&
			mb_strlen($_POST["user_address"]) >= 10 &&
			mb_strlen($_POST["user_address"]) <= 130 &&
			mb_strlen($_POST["postal_code"]) >= 4 &&
			mb_strlen($_POST["postal_code"]) <= 35 &&
			mb_strlen($_POST["city"]) >= 5 &&
			mb_strlen($_POST["city"]) <= 40
		){
				$modelUsers = new Users();
				$user_id = $modelUsers->registerDetails($_POST);
				
			if(!empty($user_id)){
				$_SESSION["user_id"] = $_POST;
				header("Location: " . ROOT . "/" );
			}else{
				$message = "Respectivo e-mail já existe";
			}
		}else{
			$message = "Faça favor de preencher os respectivos campos";
		}		
	}

	require("Views/view-register.php");
?>