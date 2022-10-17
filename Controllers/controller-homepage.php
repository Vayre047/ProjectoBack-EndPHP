<?php
    $title = "FarmShop - Homepage";

    require("Views/Layout/header.php");

    $randProducts = $modelProducts->RandomProduct();

    $date = date('y-m-d');

    $modelSeason = new Season();

    $season = $modelSeason->getSeason($date); 

    require("Views/view-homepage.php");

?>