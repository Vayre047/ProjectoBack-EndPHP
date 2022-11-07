<?php

    $title = "Apagar Categoria";

	$titleSecondary = "Actualizar Categoria";

    $modelCategories = new Categories();

	$categories = $modelCategories->allCategories();

	if (isset($_POST["delete"])) {
        $modelCategories->deleteCategory($_POST);

        header("Location: " . ROOT . "/home" );
	}

    if (isset($_POST["update"])) {
        $modelCategories->updateProduct($_POST, $category_id);
        
        header("Location: " . ROOT . "/home" );
	}
    
    require("Admin/Views/view-delUpdCategory.php");
?>