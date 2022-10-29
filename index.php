<?php

    session_start();

    define("ENV", parse_ini_file(".env"));
    
    define("ROOT", rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/"));
    define("URL", "/");

    $url = explode("/", $_SERVER['REQUEST_URI']);

    $controllers = [
        "cart", "homepage", "login", "logout", "productdetails", "register", "listproducts", "season", "category", "removeitem", "paymentmethod", "admin"
    ];

    $controller = $url[1] ?: "homepage";

    $id = $url[2] ?? "";

    if(!in_array($controller, $controllers)){
        die("Sem Atribução de Página");
    }
    
    require("Models/model-category.php");
    
    $modelCategories = new Categories();

    $categories = $modelCategories->allCategories();
    
    require("Models/model-season.php");
    
    $modelSeasons = new Season();
    
    $seasons = $modelSeasons->allSeasons();

    require("Models/model-products.php");

    $modelProducts = new Products();

    $products = $modelProducts->allProducts();

    require("Models/model-users.php");

    $modelUsers = new Users();

    if(isset($_SESSION["user_id"])){
        $user = $modelUsers->getUser($_POST["email"]);
    }

    require("Models/model-languages.php");

    $modelLanguages = new Languages();

    $languages = $modelLanguages->getAllLanguages($id);

    require("Controllers/controller-" . $controller . ".php");

?>