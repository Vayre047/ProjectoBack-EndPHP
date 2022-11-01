<?php

    $title = "Inserir Novo Produto";

	if (isset($_POST['send'])) {
		$modelProducts = new Products();
		$product_id = $modelProducts->addProduct($_POST);
		
		if(!empty("product_id")){
			$_SESSION["product_id"] = $product_id;
			header("Location: " . ROOT . "/home" );
		}else{
			$message = "Já existe o producto";
		}		
	}
    require("Admin/Views/view-addProduct.php");
?>