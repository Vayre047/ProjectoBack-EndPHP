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
    <link rel="stylesheet" type="text/css" href="<?=URL ?>../SCSS/index.scss">
    <script src="../../Javascript/index.js" type ="text/javascript"></script>
    <title><?= $title; ?></title>
</head>
<body data-root="<?php echo ROOT; ?>">
    <header> 
        <div class="sm-box sm-box--1 pt-3">
            <?php echo '<a class="ps-5" href="' .ROOT.'/home">
                <img src="'.URL.'Images/agronomy-icon.png" alt="Homepage">
            </a>'?>
        </div>
        <div class="sm-box sm-box--4">
            <h1 class="pt-1 mainTitle">Horizon Farm</h1>
        </div>
        <div>
            <p class="pt-4 mainTitle h2">Administrative Area</p>
        </div>
        <?php
            if(!isset($_SESSION["user_id"])){
             ?>
        <div class="pt-2 sm-box ">
                    <?php echo '<a href="'.ROOT.'/logout"> Sair </a>'; ?>
                </div>
                <?php
            }
            ?>
    </header>