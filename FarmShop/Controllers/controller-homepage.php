<?php
    $title = "FarmShop - Homepage";

    require("Views/Layout/header.php");

    $modelProducts = new Products();

    //$randNumber = rand( 0, count($products)-1);

    $randProducts = $modelProducts->RandomProduct();


    $date = date('y-m-d');

    $modelSeason = new Season();

    $season = $modelSeason->getSeason($date); 

    require("Views/view-homepage.php");

?>