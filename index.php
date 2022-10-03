<?php

    session_start();

    define("ENV", parse_ini_file(".env"));
    
    define("ROOT", rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/"));

    $url = explode("/", $_SERVER['REQUEST_URI']);

    $controllers = [
        "cart", "homepage", "login", "logout", "productdetails", "register", "listproducts", "season", "category"
    ];

    $controller = $url[2] ?: "homepage";
    $id = $url[3] ?? "";

    if(!in_array($controller, $controllers)){
        die("Sem Atribução de Página");
    }

    require("Controllers/controller-" . $controller . ".php");

?>