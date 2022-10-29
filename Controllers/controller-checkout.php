<?php

    if(!isset($_SESSION["user_id"])){
    ?>
        <?php
        header("Location: " . ROOT . "/login");
        exit;
    }

    if(empty($_SESSION["cart"])){
        header("Location: " . ROOT . "/cart");
        exit;
    }

    require("Models/model-orders.php");

    $updatedOrders = new Orders();
    $updatedProducts = new Products();

    $orderIdentification = $modelOrders->create($_SESSION["user_id"]);

    foreach($_SESSION["cart"] as $productItem){
        $productItem["order_id"] = $order_id;
        $updatedOrders->createDetail($productItem);

        $updatedProducts->updateStock($productItem["product_id"], $productItem["quantity"]);
    }

    unset($_SESSION["cart"]);

    $title = "Pagamento";
    $paymentMethod = mt_rand(10000000, 999999999);

    require("Views/view-checkout.php");
?>