<?php

    if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($product_id) && is_numeric($product_id) && isset($_POST["quantity"]) && intval($_POST["quantity"]) > 0 && 
    isset($_SESSION["cart"][$product_id]) && $_SESSION["cart"][$product_id]["stock"] >= $_POST["quantity"]){

        header("Content-Type: application/json");

        $_SESSION["cart"][$product_id]["quantity"] = intval($_POST["quantity"]);

        echo '{"Message":"Accepted"}';
    }else{
        http_response_code(405);
        exit;
    }
?>