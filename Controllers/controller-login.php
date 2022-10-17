<?php
    
    $title = "FarmShop";

    
    if (isset($_POST['send'])) {
        if (
            !empty($_POST["user_email"]) &&
            !empty($_POST["password"]) &&
            filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)
        ) {
            require('Models/model-users.php');

            $model = new Users();

            $user = $model->login($_POST);

            if(!empty($user)){
                $_SESSION["user_id"] = $user["user_id"];

                header("Location: " . ROOT . "/");

                exit;
            }
        }
    }

    require("Views/view-login.php");
?>