<?php

    session_start();

    define("ENV", parse_ini_file(".env"));
    
    define("ROOT", rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/"));
    define("URL", "/");

    $url = explode("/", $_SERVER['REQUEST_URI']);

    $controllers = [
        "admin", "products", "user", "login", "home"
    ];

    $controller = $url[0] ?: "admin";

    $id = $url[1] ?? "";

    if(!in_array($controller, $controllers)){
        die("Sem Atribução de Página");
    }
   require("Controllers/controller-" . $controller . ".php");
?>