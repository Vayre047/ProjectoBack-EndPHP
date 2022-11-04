<?php

    $title = "Inserir Nova Categoria";
    
    if (isset($_POST['send'])){
        $addOnecategory = $modelCategories->addCategory($_POST);
    }
	
    require("Admin/Views/view-addCategory.php");
?>