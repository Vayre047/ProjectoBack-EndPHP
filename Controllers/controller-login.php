<?php

    $title = "Efectuar Login";

    if(isset($_POST["send"])){
        if(!empty($_POST["email"]) &&
            !empty($_POST["password"]) &&
            filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
             mb_strlen($_POST["password"]) >= 5 &&
             mb_strlen($_POST["password"]) <= 1000
            ){
                require("Models/model-users.php");
                $model = new Users();

                $user = $model->loginDetails($_POST);

                if(!empty($user)){
                    $_SESSION["user_id"] = $user;
    
                    header("Location: " . ROOT . "/");
                    exit;
                }
        
            }

            $message = "Email ou password erradas";
            
    }

    require("Views/view-login.php");

?>