<?php

    $title = "Apagar Usuário";

	$titleSecondary = "Actualizar Usuário";

	require("Models/model-users.php");

    $modelUsers = new Users();

	$users = $modelUsers->getAdminUser();

	if (isset($_POST["delete"])) {

        $modelUsers->deleteAdminUser($_POST);

        header("Location: " . ROOT . "/home" );
	}

    if (isset($_POST["update"])) {

        $modelUsers->updateAdminUser($_POST, $user_id);
        
        header("Location: " . ROOT . "/home" );
	}
    require("Admin/Views/view-delUpdUser.php");
?>