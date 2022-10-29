<?php

	$userEmail = $_POST['user_email'];
	$userPassword = $_POST['password'];

	require("../Models/model-users.php");

	$modelAdminUsers = new UsersAdmin();

	$usersAdmin = $modelAdminUsers->usersLogin();

	require("Views/view-homepage.php");
?>