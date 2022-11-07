<?php
    $title = "Actualizar Usuário";

    $titleSecondary = "Actualizar Usuário";

    require("Models/model-users.php");

    $modelUsers = new Users();

	$users = $modelUsers->getUserData($id);

	if (isset($_POST["update"])) {
        /*if(filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL) &&
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
			mb_strlen($_POST["city"]) <= 40){*/
            $modelUsers->updateAdminUser($_POST, $id);
            header("Location: " . ROOT . "/home" );
        //}
	}  
    require("Admin/Views/view-updateUser.php");
?>