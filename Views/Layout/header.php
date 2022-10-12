<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,300&family=Dancing+Script&family=Edu+TAS+Beginner&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=URL ?>SCSS/index.scss">
    <script src="Javascript/index.js" type ="text/javascript"></script>
    <title><?= $title; ?></title>
</head>
<body data-root="<?php echo ROOT; ?>">
    <header>
        <div class="grid-container">
            <div class="sm-box sm-box--1">
                <?php echo '<a class="ps-5" href="' .ROOT.'/">
                    <img src="'.URL.'Images/agronomy-icon.png">
                </a>'?>
            </div>
             <div class="sm-box sm-box--2">
                <div class="primaryConfiguration">
                    <?php echo '<a href="' .ROOT. '/listproducts">
                        <button type="button" class="navbarButton">Productos</button>
                    </a>' ?>
                <ul class="navbarList">
    <?php
        foreach($products as $product){
            echo '<li class="listConfiguration fst-italic"><a class="linkConfiguration fst-italic" href="' .ROOT. '/productdetails/' .$product["product_id"] . '">' . $product["product_name"] .'</a></li>';
        }
    ?>
                    </ul>
                </div>
            </div>
            <div class="sm-box sm-box--3">
                <ul class="primaryConfiguration">
                    <button type="button" class="navbarButton">Categorias</button>
                    <ul class="navbarList">
    <?php
        foreach($categories as $category){
            echo '<li class="listConfiguration fst-italic"><a class="linkConfiguration fst-italic" href="' .ROOT. '/category/' .$category["category_id"] . '">' . $category["category_name"] .'</a></li>';
        }
    ?>
                    </ul>
                </ul>
            </div>
            <div class="sm-box sm-box--4">
                <ul class="primaryConfiguration">
                    <button type="button" class="navbarButton">
                        Estações
                    </button>
                    <ul class="navbarList">
    <?php
        foreach($seasons as $season){
            echo '<li class="listConfiguration"><a class="linkConfiguration" href="' .ROOT. '/season/' .$season["season_id"] . '">' . $season["season_name"] . '</a></li>';
        }
    ?>
                        </ul>
                    </ul>
            </div>    
            <div class="sm-box sm-box--5">
                <h1 class="pt-1 mainTitle">Horizon Farm</h1>
            </div>
            <div class="pt-2 sm-box sm-box--6">
                <?php echo '<a class="mainLink" href="' .ROOT. '/login">Login</a>';?>
            </div>
            <div class="pt-2 sm-box sm-box--7">
                <?php echo '<a class="mainLink" href="' .ROOT. '/register">Criar Conta</a>';?>
            </div>
            <div class="sm-box sm-box--8">
                <?php echo '<a href="'.ROOT.'/cart">
                    <img src="'.URL.'Images/harvest-icon.png">
                </a>';
                ?>
            </div>
        </div>
    </header>