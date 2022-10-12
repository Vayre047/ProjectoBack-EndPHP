<?php
	
	if (isset($_POST["send"])) {

        require("Models/model-products.php");

        $model = new Cart();

        $product = $model->cart($_POST["product_id"]);

        if (!empty($product)){
            foreach($product as $product){
                if($product["stock"] >= $_POST["quantity"]){
                    echo "There is no error here";
                    $_SESSION["cart"][$_POST["product_id"]] = [
                    "product_id" => $product["product_id"],
                    $_POST["quantity"] => intval($_POST["quantity"]),
                    "product_image" => $product["product_image"],
                    "product_name" => $product["product_name"],
                    "product_price" => $product["product_price"],
                    "stock" => $product["stock"]];
                }else{
                    echo '<p>Error Message: Not Found</p>';
                }
            }

        } /*&& $product["stock"] >= $_POST["quantity"]) {
            echo "There is no error here";
            $_SESSION["cart"][$_POST["product_id"]] = [
                "product_id" => $product["product_id"],
                "quantity" => intval($_POST["quantity"]),
                "product_image" => $product["product_image"],
                "product_name" => $product["product_name"],
                "product_price" => $product["product_price"],
                "stock" => $product["stock"]
            ];
            //header("Location: " .ROOT. "/cart");
        }else{
            echo '<p>Error Message: Not Found</p>';
        }*/
    }else{
            echo '<p>Error Message: Not Found Anymore</p>';
        }

    /*
    $modelOrder = new Order();

    $order = $modelOrder->orderShipping();
    */

    $title = "Carrinho";

    require("Views/view-cart.php");

?>