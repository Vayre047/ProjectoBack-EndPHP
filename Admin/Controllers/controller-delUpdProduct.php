<?php

    $title = "Apagar Producto";

	$titleSecondary = "Actualizar Producto";

    $modelProducts = new Products();

	$products = $modelProducts->allProducts();

	if (isset($_POST["delete"])) {
        $modelProducts->deleteProduct($_POST);

        header("Location: " . ROOT . "/home" );
	}

    if (isset($_POST["update"])) {
        $modelProducts->updateProduct($_POST, $product_id);
        
        header("Location: " . ROOT . "/home" );
	}
    
    require("Admin/Views/view-delUpdProduct.php");
?>