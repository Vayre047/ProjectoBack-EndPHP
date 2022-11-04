<?php
    $title = "Actualizar Usuário";

    $titleSecondary = "Actualizar Usuário";

    require("Models/model-users.php");

    $modelUsers = new Users();

	$users = $modelUsers->getAdminUser();

    var_dump($_POST["user_id"]);

/*
	if (isset($_POST["update"])) {

        $modelUsers->updateAdminUser($_POST);

        header("Location: " . ROOT . "/home" );
	}
    */

    require("Admin/Views/view-updateUser.php");
?>