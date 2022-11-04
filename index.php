<?php

    session_start();

    define("ENV", parse_ini_file(".env"));
    
    define("ROOT", rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/"));
    define("URL", "/");

    $url = explode("/", $_SERVER['REQUEST_URI']);

    $controllers = [
        "cart", "homepage", "login", "logout", "productdetails", "register", "listproducts", 
        "season", "category", "removeitem", "paymentmethod", "conta", "admin", "home", "addUser", 'addCategory', "addProduct", "delUpdUser", "delUpdProduct", "deleteCategory", "updateUser"
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

    if($url[1]=='admin' || $url[1]=='home' || $url[1] == 'addUser' || $url[1] == 'addProduct' 
    || $url[1] == 'addCategory' || $url[1] == 'delUpdUser' || $url[1] == 'delUpdProduct' || $url[1] == 'deleteCategory'|| $url[1] == 'updateUser'){
        require("Admin/Controllers/controller-" . $controller . ".php");
    }else{
        require("Controllers/controller-" . $controller . ".php");
    }

?>