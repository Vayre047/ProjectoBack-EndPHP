<?php

	if (isset($_POST["send"])) {

        $product = $modelProducts->getProduct($_POST["product_id"]);

        if (!empty($product)){
            if($product["stock"] >= $_POST["quantity"]){
                $_SESSION["cart"][$_POST["product_id"]] = [
                    "product_id" => $product["product_id"],
                    "quantity" => intval($_POST["quantity"]),
                    "product_image" => $product["product_image"],
                    "product_name" => $product["product_name"],
                    "product_price" => $product["product_price"],
                    "stock" => $product["stock"]];
                header("Location: " .ROOT. "/cart");
            }else{
                echo '<p>Error Message: Not Found</p>';
            }
        }
    }
    $title = "Carrinho";

    require("Views/view-cart.php");

?>