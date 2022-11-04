<?php

    $title = "Inserir novo empregado";
	
	require("Models/model-users.php");

	if (isset($_POST['send'])) {
		if(
			filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["password"] &&
			mb_strlen($_POST["firstName"]) >= 3 &&
			mb_strlen($_POST["firstName"]) <= 72 &&
			mb_strlen($_POST["lastName"]) >= 3 &&
			mb_strlen($_POST["lastName"]) <= 72 &&
			mb_strlen($_POST["password"]) >= 5 &&
			mb_strlen($_POST["password"]) <= 255 &&
			mb_strlen($_POST["address"]) >= 10 &&
			mb_strlen($_POST["address"]) <= 130 &&
			mb_strlen($_POST["postal_code"]) >= 4 &&
			mb_strlen($_POST["postal_code"]) <= 35 &&
			mb_strlen($_POST["city"]) >= 5 &&
			mb_strlen($_POST["city"]) <= 40
		){
				$modelUsers = new Users();
				$user_id = $modelUsers->registerAdmin($_POST);
				
			if(!empty($user_id)){
				$_SESSION["user_id"] = $user_id;
				header("Location: " . ROOT . "/home" );
			}else{
				$message = "O e-mail já existe";
			}
		}else{
			$message = "Informação não está correcta, confirme se o email ou password estão correctos";
		}		
	}
    require("Admin/Views/view-addUser.php");
?>