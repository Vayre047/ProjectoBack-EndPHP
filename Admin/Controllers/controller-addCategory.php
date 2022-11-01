<?php

    $title = "Inserir Nova Categoria";

    $addOnecategory = $modelCategories->addCategory($_POST);
	
    require("Admin/Views/view-addCategory.php");
?>